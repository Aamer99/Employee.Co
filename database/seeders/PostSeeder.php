<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Post::factory(10)->create(); 
        Post::create([
            'id'=>"1234",
            'status'=>"Error",
            'data'=>"there is error. Please try again",
            'created_at'=>now()
        ]);
    
    }
}