<?php

namespace App\Http\Controllers;


use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

use function Termwind\render;

class EmployeeController extends Controller
{
    public function index(){
     
        if(auth()->check()) {
   
        return view('Employees',['employees'=>Employee::all()]);

        } else {
           return redirect("/login");
        }
    }

    public function showAddEmployee(){
        return view("addEmployee");
    }

    public function showEditEmployee(Employee $employee){
     
        return view("editEmployee",['employee'=>$employee]);
    }

   public function createNewEmployee(Request $request){

     // check from the requests 

     $request->validate([
        
        'employee_name'=> 'required',
        'employee_email'=> ['required','email'],
        'employee_password'=> ['required','min:10','confirmed'],
        'employee_image' =>['required']
    ]);
 
    // check if the file exist 

    if($request->hasFile("employee_image")){
        $imagePath = $request->file('employee_image')->store('employeesImage','public'); 
        
        //create the user 
        Employee::create([
            
            'employee_name'=>$request->employee_name,
            'employee_email'=>$request->employee_email, 
            'employee_password'=> Hash::make($request->employee_password),
            'employee_image' =>$imagePath,
            'created_at'=>now()

        ]);
      
        return redirect('/');
       
    }
       

    }

    public function editEmployee(Request $request,Employee $employee){

        $request->validate([
        
            'employee_password'=> ['min:6','confirmed'],
           
        ]);  

       
        if($request->hasFile("employeeImage")){
            Storage::delete($employee->employee_image);
            $imagePath = $request->file('employeeImage')->store('employeesImage','public'); 
            $employee->update([
                'employee_name'=>$request->employeeName,
                'employee_password'=> Hash::make($request->employee_password),
                'employee_image'=> $imagePath
    
            ]);
    
        } else{
       

        $employee->update([
            'employee_name'=>$request->employeeName,
            'employee_password'=> Hash::make($request->employee_password),
        ]);
    }
        return redirect('/');
    }

    public function deleteEmployee(Employee $employee){
        $employee->delete();
       return redirect('/');
    }
    public function filterEmployees(){
        return Employee::latest()-> filter(request(['tag']))-> get();
    }
    
}