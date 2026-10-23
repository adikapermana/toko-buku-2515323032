<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;
use App\Models\Category;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pemrograman = Category::where('name', 'Pemrograman')->first();
        $novel = Category::where('name', 'Novel')->first();
        $keuangan = Category::where('name', 'Keuangan')->first();

        Book::create([
            'category_id' => $pemrograman->id,
            'title' => 'Dasar Pemrograman Dalam Bahasa C',
            'author_name' => 'Bernadus Angga Seno Aji',
            'price' => 103000,
        ]);

        Book::create([
            'category_id' => $pemrograman->id,
            'title' => 'Pemrogramman Laravel',
            'author_name' => 'Ade Rahmat Iskandar',
            'price' => 72000,
        ]);

        Book::create([
            'category_id' => $novel->id,
            'title' => 'Bumi',
            'author_name' => 'Tere Liye',
            'price' => 68000,
        ]);

        Book::create([
            'category_id' => $novel->id,
            'title' => 'Bulan',
            'author_name' => 'Tere Liye',
            'price' => 64000,
        ]);

        Book::create([
            'category_id' => $keuangan->id,
            'title' => 'Principles Of Economy',
            'author_name' => 'N. Gregory Mankiw',
            'price' => 85000,
        ]);

        Book::create([
            'category_id' => $keuangan->id,
            'title' => 'The Intelligent Investor',
            'author_name' => 'Benjamin Graham',
            'price' => 90000,
        ]);

        
    }
}
