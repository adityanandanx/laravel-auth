<?php

namespace Database\Seeders;

use App\Models\Book;
use Database\Seeders\Helpers\FKTruncateHelper;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        FKTruncateHelper::truncate(Book::class);
        Book::factory(20)->create();
    }
}
