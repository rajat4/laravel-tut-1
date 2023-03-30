<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function index(){
        return view('form');
    }

    public function register(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'email' => 'required | email',
                'password' => 'required',
                'confirm_password' => 'required'
            ]
        );
        echo "<pre>";
        print_r($request->all());
    }
}
