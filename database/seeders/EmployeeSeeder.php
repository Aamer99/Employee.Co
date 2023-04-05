<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Employee::factory(10)->create();
        Employee::create([
        
            'employee_name'=>"Amer Essa",
            'employee_email'=>"amer-essa@gmail.com", 
            'employee_password'=>"12344",
            'employee_image'=>"employeesImage/UFEJws6ExepASfif3SLslaZqfhWUVo5lxLQvjVNQ.jpg",
            'created_at'=>now()
        ]);
    
    }
}