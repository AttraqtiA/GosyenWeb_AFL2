<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\TeamSeeder;
use Database\Seeders\ClientSeeder;
use Database\Seeders\GallerySeeder;
use Database\Seeders\ServiceSeeder;
use Database\Seeders\ClientServiceSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            ClientSeeder::class,
            ServiceSeeder::class,
            TeamSeeder::class,
            ClientServiceSeeder::class,
            GallerySeeder::class,
        ]);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
