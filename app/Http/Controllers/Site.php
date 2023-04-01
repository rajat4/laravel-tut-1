<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Site extends Controller
{
    public function first()
    {
        // echo "<h1>Welcome to first method</h1>";
        return view("first"); //first.blade.php
    }
}
