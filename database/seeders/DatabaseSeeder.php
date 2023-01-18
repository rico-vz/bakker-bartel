<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Assortment;
use App\Models\Employee;
use App\Models\Function_db;
use App\Models\Order;
use App\Models\Product;
use App\Models\Stock;
use App\Models\User;
use App\Models\VacationRequest;
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



        // The seeders are called in the order they are listed here.
        // This is necessary because of the foreign keys.
        // Changing the order will result in an error.
        Function_db::factory(10)->create();
        Employee::factory(10)->create();
        User::factory()->create([
            'employee_id' => '1',
            'name' => 'TestAdmin',
            'email' => 'test@admin.com',
            'password' => bcrypt('password'), // password
        ]);
        User::factory(10)->create();
        VacationRequest::factory(10)->create();
        Order::factory(10)->create();
        Assortment::factory(10)->create();
        Product::factory(10)->create();
        Stock::factory(10)->create();
    }
}