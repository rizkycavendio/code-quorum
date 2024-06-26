<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Str;
use Database\Seeders\TagSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'uid'      => (string) Str::uuid(),
            'username' => 'rizkycavendio',
            'email' => 'dio@test.com',
            'about' => 'Saya seorang Junior Software Engineer',
            'location' => 'Jakarta',
        ]);

        $this->call([
            TagSeeder::class,
        ]);
    }
}
