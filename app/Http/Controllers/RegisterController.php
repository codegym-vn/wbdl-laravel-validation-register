<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function showFormRegister()
    {
        return view('register');
    }

    public function register(RegisterRequest $request){
        echo "Register account successfully";
    }
}
