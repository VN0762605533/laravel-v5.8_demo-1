<?php

namespace App\Http\Controllers\user;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use Illuminate\Support\Facades\DB;

class profileController extends Controller
{
    //
    public function index()
    {
    	// dd('profile page');
    	$id = session('user_info')['id'];
    	$dataInfo = DB::table('users')->select('name', 'email')->where('id', $id)->get();
    	return view('profiles.index', compact('dataInfo'));
    }

    //
    public function show()
    {

    }
}
