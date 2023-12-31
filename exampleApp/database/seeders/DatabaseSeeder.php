<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();


        DB::table('autors')->insert([
            'name' => 'Karel',
            'email' => 'karelmuj@gmail.com',
        ]);

        DB::table('autors')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
        ]);


        DB::table('books')->insert([
            'name' => 'book' . Str::random(10),
            'autor_id' => 1,
        ]);

        DB::table('books')->insert([
            'name' => 'book' . Str::random(10),
            'autor_id' => 1,
        ]);
    }
}
