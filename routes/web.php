<?php

use App\Http\Controllers\EmployeeController;
use App\Models\Employee;
use Illuminate\Support\Facades\Route;
use App\Models\users;
use App\Models\User;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [EmployeeController::class, "index"]);
Route::get("/employee/addNewEmployee",[EmployeeController::class,"showAddEmployee"]);
Route::post("/employee",[EmployeeController::class,"createNewEmployee"]);
Route::get("/employee/{id:}/edit",[EmployeeController::class,"showEditEmployee"]);



Route::get('/hi', function () {

    // $array = [
    //     [
    //         'id' => 1,
    //         'name' => 'amer',
    //         'email' => 'amer@example.com',
    //     ],
    //     [
    //         'id' => 2,
    //         'name' => 'ali',
    //         'email' => 'ali@example.com',
    //     ]
    // ];
    // $data = collect($array)->map(function ($item) {
    //     return $item->name === 'amer';
    // });

    return view("test", ['viewName'=>'Users View','array' => Employee::all()]);


    // return view("test",'arr' => [[['id' => 1, 'name' => "omar Essa", 'email' => "omar@gmail.com"], ['id' => 1, 'name' => "omar Essa", 'email' => "omar@gmail.com"]]]); // we pass data to test View 

});



Route::get('/user/{id}', function ($id) {
    return response("<?php phpinfo(); ?>");
});

Route::get('/userID/{id}', function ($id) {
return response("Posts" . $id);
})->where("id", '[0-9]+');