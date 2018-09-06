<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class VideoController extends Controller
{
    public function index(){
    	return view('video');
    }

    public function getData(Request $request){
    	 $req = $request->file('video-blob')->move(public_path('videos'), $request->file('video-blob')->getClientOriginalName());
    	 return $req;
    }
}
