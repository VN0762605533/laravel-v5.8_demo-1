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
    	
    	// section image story
    	$dataImages = DB::table('diaries')
    				 ->join('images', 'images.idstory', '=', 'diaries.id')
    				 ->select('images.name', 'diaries.id')
    				 ->where('diaries.status', 1)
                     ->where('diaries.idUser', $id)
    				 ->get();

    	$checkImages = count($dataImages);

    	return view('profiles.index', compact('dataInfo', 'dataImages', 'checkImages'));
    }

    //
    public function show()
    {

    }
}
