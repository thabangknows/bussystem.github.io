<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    //
    public function login(Request $request) {

        $request->validate([
            'student_no' => 'required',
            'password' => 'required',
        ]);

        if(Auth::attempt($request->only('student_no', 'password'))){
            return response()->json(Auth::user(),200);
        }
        throw ValidationException::withMessages([
            'student_no' => ['Incorrect password or Email address']
        ]);
    }
}
