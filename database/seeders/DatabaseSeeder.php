<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Employee;
use App\Models\Function_db;
use App\Models\User;
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


        Function_db::factory(10)->create();

        Employee::factory(10)->create();
        User::factory()->create([
            'employee_id' => '1',
            'name' => 'TestAdmin',
            'email' => 'test@admin.com',
            'password' => bcrypt('password'), // password
        ]);
        User::factory(10)->create();
    }
}