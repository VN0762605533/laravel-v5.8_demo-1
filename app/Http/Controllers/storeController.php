<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class storeController extends Controller
{
    //
    public function index()
    {
    	$store = DB::table('stores')->first();
    	// dd($storename->store_name);
    	$stores = DB::table('stores')->get();
    	// dd($data, $stores);
    	return view('layouts.app', compact('store'));
    }
}
