<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Schedule;
use Validator;
use Illuminate\Support\Facades\DB;

class userController extends Controller
{
    //
    
    public function getusers(){

        $users = DB::table('users')->get();
        return response()->json($users,200);
    }
}
