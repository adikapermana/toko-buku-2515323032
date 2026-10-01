<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    // Daftar buku
    private array $books = [
        [
            'id' => 0,
            'judul' => 'Principles Of Economics',
            'penulis' => 'N. Gregory Mankiw',
            'harga' => 300000

        ],
        [
            'id' => 1,
            'judul' => 'The Psychology of Money',
            'penulis' => 'Morgan Housel',
            'harga' => 150000
        ],
        [
            'id' => 2,
            'judul' => 'The Intelligent Investor',
            'penulis' => 'Benjamin Graham',
            'harga' => 215000
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

