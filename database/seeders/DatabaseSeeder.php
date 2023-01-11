<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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

        \App\Models\User::factory()->create([
            'name' => 'TestAdmin',
            'email' => 'test@admin.com',
            'phone_number' => '0612345678',
            'password' => bcrypt('password'), // password
            'role' => 'owner',
            'first_name' => 'Test',
            'last_name' => 'Admin',
            'address' => 'H20 Purmerend',
            'date_of_birth' => '1990-01-01',
        ]);
    }
}