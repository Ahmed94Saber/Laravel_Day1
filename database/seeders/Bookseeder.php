<?php

namespace Database\Seeders;
use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Bookseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run() 
    {
        Book::factory()->count(100)->create();
    }
}
