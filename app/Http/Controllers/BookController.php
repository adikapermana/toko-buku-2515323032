<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    // Daftar buku
    private $books = [
        [
            'id' => 0,
            'judul' => 'Laskar Pelangi',
            'penulis' => 'Andrea Hirata'
        ],
        [
            'id' => 1,
            'judul' => 'Bumi',
            'penulis' => 'Tere Liye'
        ],
        [
            'id' => 2,
            'judul' => 'Negeri 5 Menara',
            'penulis' => 'Ahmad Fuadi'
        ]
    ];

    // Menampilkan seluruh daftar buku
    public function index()
    {
        return view('buku.index', [
            'books' => $this->books
        ]);
        }

    // Menampilkan satu buku berdasarkan ID
    public function show($id)
    {
        $book = collect($this->books)->firstWhere('id', $id);

        return view('buku.show', [
            'book' => $book,
            'id' => $id
        ]);
    }
    
}

