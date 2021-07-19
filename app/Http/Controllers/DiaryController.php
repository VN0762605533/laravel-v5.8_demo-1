<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class DiaryController extends Controller
{
    //
    public function index()
    {
    	// dd('index story');
    	$stories = DB::table('diaries')->get();
    	// dd($stories);
    	return view('home', compact('stories'));
    }

    //
    public function stored(Request $request)
    {
    	// dd('stored');
    	// dd($request);
    	//validator
    	$validator = Validator::make($request->all(), [
    		'content' => 'required',
    	]);

    	if ($validator->fails())
	    {
	        dd('error');
	    }

    }
}
