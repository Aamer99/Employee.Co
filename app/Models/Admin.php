<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Admin extends Model
{
    public $timestamps = false;
    protected $fillable = ['id','fullName','email','password','phoneNumber','created_at']; 
    use HasFactory,HasFactory,Notifiable;
}
