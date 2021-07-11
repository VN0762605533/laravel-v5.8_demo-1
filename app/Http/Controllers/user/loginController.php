<?php

namespace App\Http\Controllers\user;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
// use \Illuminate\Http\Response;
// use Illuminate\Validation\Rule;
use Auth;
use Carbon\Carbon;
use Session;

class loginController extends Controller
{
    //
    public function index()
    {
    	return view('auths.index');
    }

    public function store(Request $request)
    {
    	//validator
    	$validator = Validator::make($request->all(), [
    		'email' => 'required|email',
    		'password' => 'required|min:8'
    	]);

    	if ($validator->fails()) {
    		return redirect('login')
    				->withErrors($validator)
    				->withInput();
    	} else {
    		$passwordDB = DB::table('users')->select('password')->where('email', $request->email)->get();
			
            if(Auth::attempt(['email'=>$request->email,'password'=>$request->password]))
		    {
		    	$data = DB::table('users')->select('id', 'name')->where('email', $request->email)->first();
		    	$user_info['email'] = $request->email;
		    	$user_info['id'] = $data->id;
		    	$user_info['name'] = $data->name;
		    	session(['user_info'=>$user_info]);
		        return redirect()->intended('/');
		    }
		    else
		    {
		    	$data = ['loginFail'=>'Wrong Credentials'];
		    	return view('auths.index')->with($data);
		    }
    	}
    }

}
