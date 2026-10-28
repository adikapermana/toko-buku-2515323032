<?php

namespace Database\Seeders;

use App\Models\Publisher; 
use Illuminate\Database\Seeder;

class PublisherSeeder extends Seeder
{
    public function run(): void
    {
        Publisher::create(['name' => 'A', 'city' => 'Jakarta']);
        Publisher::create(['name' => 'B', 'city' => 'Bandung']);
        Publisher::create(['name' => 'C', 'city' => 'Surabaya']);
    }
}