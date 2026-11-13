<?php

namespace Database\Seeders;

use App\Models\Penulis;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PenulisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Penulis::firstOrCreate(['nama' => 'Andrea Hirata'], ['negara' => 'Indonesia']);
        Penulis::firstOrCreate(['nama' => 'Tere Liye'], ['negara' => 'Indonesia']);
        Penulis::firstOrCreate(['nama' => 'Pramoedya Ananta Toer'], ['negara' => 'Indonesia']);
    }
}
