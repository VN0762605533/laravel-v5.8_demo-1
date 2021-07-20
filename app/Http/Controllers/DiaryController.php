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
    		'story' => 'required',
    		'content' => 'required',
    	]);

    	if ($validator->fails())
	    {
	       return response()->json(['errors'=>$validator->errors()->all()]);
	    }
	    else
	    {
	    	DB::table('diaries')->insert([
        		'story' => $request->story,
        		'content' => $request->content
        	]);
        	return response()->json(['success'=>'Data is successfully added']);
	    }

    }
}
