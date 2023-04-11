<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;

use App\Models\User;
use GuzzleHttp\Psr7\UploadedFile;
use Tests\TestCase;
use App\Category;
use Faker\Generator as Faker;
use Illuminate\Http\Testing\File;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\WithoutMiddleware;

class ExampleTest extends TestCase
{
    // use RefreshDatabase;
    use DatabaseMigrations;
    /**
     * A basic test example.
     */
    public function test_the_register(): void
    {
       
         $this->makeUser();
        $file = File::create("test.png",100);
        
          $data = [
            'userName'=> auth()->user()-> name,
            'email'=> auth()->user()-> email,
            'userPassword' => auth()->user()-> password,
            'userPassword_confirmation'=> auth()->user()-> password,
            'userProfileImage' => $file,
            'type'=> 1
         ];
          $this->withoutExceptionHandling();
         $response = $this->post("/user/register",$data);      
         $response->assertStatus(302);
    }

    // public function test_the_(): void
    // {
       
    //      $user = $this->makeUser();
    

    //       $data = [
    //         'postTitle'=> "post test",
    //         'postContent'=> "post Content ",
    //      ];
    //       $this->withoutExceptionHandling();
    //      $response = $this->get("/editProfile/110",$data);      
    //      $response->assertStatus(200);
    // } 

    protected function makeUser()
{
 

    $user = new User(
        [
            'name'          => 'Tester',
            'email'         => 'tester4@email.com',
            'type'          => 0,
            'password'      => '123456',
            'total_posts'   => 0,
        ]
    );
    $user->setAttribute('id', 115);
    $this->be($user)->withSession([$user]);
}

protected function getUser()
{

    $user = User::find(11);
    $this->be($user);
}
}
