<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $email = "rajat.thawal@crestit.in";
        $name = "Rajat Thawal";
        
        return view("services", compact("email", "name"));
    }
}
