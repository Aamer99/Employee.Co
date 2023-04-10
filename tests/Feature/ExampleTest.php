<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;

use App\Models\User;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        // $response = $this->get('/');
        
        //$resualt = $rep-> create($data);
        // $user = factory(User::class)->create();
        // $user = User::factory()->make();
        $user = User::first();
        
      
        //  $response = $this->actingAs($user);
        //  $data = [
        //     'email'=>$response-> email,
        //     'password' => "admin123456"
            
        //     // 'user_id' => $user->id
        // ];
    //    ->withSession(['user_id' => $user->id])
    //    ->post('/login',$data);
    //    $data = [
    //     'emial'=>"admin@admin.com",
    //     'password'=> "admin123456"
    //    ];
        // $response = $this->post("/user/login",[$data]);
   
      
        //  $response = $this->post("/user/login",[$data]);
         
        // $response->assertStatus(200);
    
    }
}
