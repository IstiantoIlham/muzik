<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Music;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Music::factory()->create([
            'Title' => 'Ano Yume Wo Nazote',
            'singer' => 'Yoasobi',
            'src' => 'https://upload.wikimedia.org/wikipedia/id/2/2d/Ano_Yume_o_Nazotte_cover_art.jpg',
            'audio' => "Test"
        ]);
    }
}
