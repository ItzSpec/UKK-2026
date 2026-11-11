<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate(['email' => 'admin@perpus.test'], ['name' => 'Admin', 'password' => 'admin123', 'role' => 'admin']);
        User::updateOrCreate(['email' => 'siswa@perpus.test'], ['name' => 'Dimas', 'password' => 'dimas123', 'role' => 'siswa', 'kelas' => 'XII RPL 2']);

        Book::updateOrCreate(
            ['id' => 1],
            ['title' => 'placeholder1', 'author' => 'saya1', 'publisher' => 'saya juga1', 'year' => 2005]
        );
        Book::updateOrCreate(
            ['id' => 2],
            ['title' => 'placeholder2', 'author' => 'saya2', 'publisher' => 'saya juga2', 'year' => 2014]
        );
        Book::updateOrCreate(
            ['id' => 3],
            ['title' => 'placeholder3', 'author' => 'saya3', 'publisher' => 'saya juga3', 'year' => 2023]
        );
    }
}