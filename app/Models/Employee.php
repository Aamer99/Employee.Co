<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model

{
    public $timestamps = false;
    protected $fillable = ['id','employee_name','employee_email','employee_password','employee_image','created_at']; 
    
    use HasFactory; 

}