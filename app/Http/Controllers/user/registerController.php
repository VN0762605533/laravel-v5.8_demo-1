<?php

namespace App\Http\Controllers\user;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
//
use App\User;
use \Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class registerController extends Controller
{
    //
    public function create()
    {
    	return view('auths.register');
    }

    public function store(Request $request)
    {
    	// validate rules
    	// dd(Hash::make($request->password));
    	
    	$validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
	        'email' => 'required|email',
	        'password' => 'required|min:8'
        ]);

        if ($validator->fails()) {
           // dd($validator->errors());
        	return redirect('register')
                        ->withErrors($validator)
                        ->withInput();
        } else {
        	DB::table('users')->insert([
        		'name' => $request->name,
        		'email' => $request->email,
        		'password'=> Hash::make($request->password),
        		'created_at' => Carbon::now(),
        		'updated_at' => Carbon::now(),
        	]);
        	return redirect('/login');
        }
	}
}
