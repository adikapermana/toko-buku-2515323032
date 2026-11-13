<?php

namespace App\Http\Controllers;

use App\Models\Penulis;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use Illuminate\Validation\Rule;

class PenulisController extends Controller
{
    public function index()
    {
        $daftarPenulis = Penulis::orderBy('nama')->get();
        return view('penulis.index', compact('daftarPenulis'));
    }

    public function create()
    {
        return view('penulis.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
        'nama'   => 'required|max:100|unique:penulis,nama',
        'negara' => 'nullable|max:100',
        ], [
        'nama.required' => 'Nama penulis wajib diisi.',
        'nama.max'      => 'Nama penulis maksimal 100 karakter.',
        'nama.unique'   => 'Nama penulis sudah terdaftar.',
        'negara.max'    => 'Negara maksimal 100 karakter.',
        ]);

        Penulis::create($data);
        return redirect()->route('penulis.index')->with('success', 'Penulis berhasil ditambahkan.');
    }

    public function edit(string $id)
    {
        $penulis = Penulis::findOrFail($id);
        return view('penulis.edit', compact('penulis'));
    }

    public function update(Request $request, string $id)
    {
        $penulis = Penulis::findOrFail($id);

        $data = $request->validate([
        'nama'   => ['required', 'max:100', Rule::unique('penulis', 'nama')->ignore($id)],
        'negara' => 'nullable|max:100',
        ], [
        'nama.required' => 'Nama penulis wajib diisi.',
        'nama.max'      => 'Nama penulis maksimal 100 karakter.',
        'nama.unique'   => 'Nama penulis sudah terdaftar.',
        'negara.max'    => 'Negara maksimal 100 karakter.',
        ]);

        $penulis->update($data);
        return redirect()->route('penulis.index')->with('success', 'Penulis berhasil diubah.');
    }

    public function destroy(string $id)
    {
        $penulis = Penulis::findOrFail($id);

        try {
            $penulis->delete();
        } catch (QueryException $e) {
            return redirect()->route('penulis.index')
                ->with('error', 'Penulis tidak dapat dihapus karena masih dipakai oleh buku.');
        }

        return redirect()->route('penulis.index')
            ->with('success', 'Penulis berhasil dihapus.');
    }
}