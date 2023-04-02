<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dummyAPI extends Controller
{
    function getData()
    {
        return ["name" => "Sara"];
    }

    function getName()
    {
        return ["name" => "Amer"];
    }

    public function createUser(Request $request)
    {
        
    }
}