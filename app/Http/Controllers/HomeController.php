<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;

//use Validator;

class HomeController extends Controller
{


    function index(Request $request){

   
        $users = DB::table('user')->get();
        return view('admin.index')->with('users', $users);
    }

}
