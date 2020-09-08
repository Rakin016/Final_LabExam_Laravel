<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;


class LoginController extends Controller
{
    
    function index(){
    	return view('login.index');
    }

    function verify(Request $request){
        
        $data = DB::table('user')
                    ->where('username', $request->username)
                    ->where('password', $request->password)
                    ->where('user_type', $request->user_type)
                    ->get();

        //print_r($data);
        //echo $data[0]->type;

    	if(count($data) > 0 ){
            $request->session()->put('username', $request->username);
            
            if($data[0]->user_type == "admin"){
                $request->session()->put('user_type', "admin");
            }

    		return redirect()->route('admin.index');
    	}else{
            $request->session()->flash('msg', 'invalid username/password');
            return redirect()->route('login.index');
        }
    }
}
