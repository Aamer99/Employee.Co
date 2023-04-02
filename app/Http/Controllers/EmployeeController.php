<?php

namespace App\Http\Controllers;


use App\Models\Employee;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class EmployeeController extends Controller
{
    public function index(){
      
        return view('Employees',['employees'=>Employee::all()]);
    }
    public function showAddEmployee(){
        return view("addEmployee");
    }
    public function showEditEmployee(Employee $employee){
        dd($employee->id);
        return view("editEmployee",['employee'=>$employee]);
    }

   public function createNewEmployee(Request $request){
     

     // check from the requests 

    $formFields= $request->validate([
        
        'employee_name'=> 'required',
        'employee_email'=> ['required','email'],
        'employee_password'=> ['required','min:10'],
        'confirm_password'=> ['required','same:employee_password'],
        'employee_image' =>['required']
    ]);

    if($request->hasFile("employee_image")){
        $formFields["employee_image"] = $request->file('employee_image')->store('employeesImage','public'); 
        
        Employee::create([
            'id'=>Str::uuid(),
            'employee_name'=>$formFields["employee_name"],
            'employee_email'=>$formFields["employee_email"], 
            'employee_password'=> Hash::make($formFields["employee_password"]),
            'employee_image' =>$formFields["employee_image"],
            'created_at'=>now()

        
        ]);

       
        return redirect('/');
       
    }
       
   

    
    
   
    
    

    }
    public function filterEmployees(){
        return Employee::latest()-> filter(request(['tag']))-> get();
    }
    
}