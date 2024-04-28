<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\Models\Movie;

class FrontendController extends Controller
{
    public function index()
    {
        $data['new_movies'] = Movie::orderBy('created_at', 'desc')->get();
        return view('front.index',$data);
    }
}