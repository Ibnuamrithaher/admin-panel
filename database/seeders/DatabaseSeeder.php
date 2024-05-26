<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        \App\Models\Post::factory(150)->create();
        \App\Models\User::factory()->create([
            'name' => 'Admin 1',
            'email' => 'test123@gmail.com',
            'password' => bcrypt('sukses123'),
        ]);
    }
}
