<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Validator;


class RegisterController extends Controller
{
    //

        public function register(Request $request) {

            $validator = Validator::make($request->all(), [
                'firstname' =>'required',
                'lastname' =>'required',
                'student_no' =>'required|unique:users',
                'email' =>'required|email',
                'password' =>'required|password|min:6',

            ]);

            User::create([
                'firstname' => $request->firstname,
                'lastname' => $request->lastname,
                'student_no' => $request->student_no,
                'email' => $request->email,
                'password' => Hash::make($request->password)
            ]);
        }

        public function updatemail($data){
            echo $data;
        }

}
