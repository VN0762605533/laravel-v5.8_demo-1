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
    	// dd($request->file('files'));
    	// dd('stored');
    	// dd($request);
    	//validator
    	$validator = Validator::make($request->all(), [
    		'story' => 'required',
    		'content' => 'required',
    		'storyFile'	=> 'required|image|mimes:jpeg,png,jpg,gif,svg',
    	]);

    	if ($validator->fails())
	    {
	       return response()->json(['errors'=>$validator->errors()]);
	    }
	    else
	    {
	    	if ($files = $request->file('storyFile')) {
	    		$input = $request->all();
	    		$image = $request->file('storyFile');
	    		// dd($request->file('storyFile')->hashName());
	    		$imageName = $request->file('storyFile')->hashName();
	    		
             
	            //store file into document folder
	            if ($image->move(public_path('photos/images'), $imageName)) {
	            	# code...
	            	DB::table('diaries')->insert([
		        		'story' => $request->story,
		        		'content' => $request->content
		        	]);
		        	$id = DB::getPdo()->lastInsertId();
		        	if ($id) {
		        		//store your file into database
			            DB::table('images')->insert([
			        		'name' => $imageName,
			        		'idstory' => $id
			        	]);
			              
			            // return response()->json(['success'=>'Data is successfully added']);
			            return redirect('/profile');
		        	}
	            }
	            else
	            {
	        		return response()->json(['errors'=>'Images error!!']);
	            }
	        }
	    }

    }
}
