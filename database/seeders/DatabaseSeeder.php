<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

//use App\Models\Employee;
//use App\Models\User;

use App\Models\Employee;
use App\Models\Post;
use App\Models\users;
use App\Models\usersLaravel;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        // this well crete 10 user withe name Test User and email test@example.com by uncomment the flowing  commend and run this commend ==>  php artisan db:seed 
        $this->call([
            EmployeeSeeder::class,
            PostSeeder::class,
            
        ]);
        
       // this way tou can crete user on the database 
        
    //    users::create([
    //         'id'=>"12345",
    //         'name' => 'Test User',
    //         'email' => 'test@example.com',
    //         'password' => 'test12345'
    //     ]);
    // Employee::factory(10)->create();
    // User::fac
    }
}