<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\Models\Movie;
use \App\Models\Shows;

class FrontendController extends Controller
{
    public function index()
    {
        $data['new_movies'] = Movie::orderBy('created_at', 'desc')->get();
        $data['new_shows'] = Shows::orderBy('created_at', 'desc')->get();
        $data['top_rates'] = Movie::where('rating', '>', 7)
        ->orderBy('created_at', 'desc')
        ->get();
        $data['hero'] = Movie::where('rating', '>', 7)
        ->orderBy('created_at', 'desc')
        ->limit(1)
        ->get();

        return view('front.index',$data);
    }

    public function show($id)
    {
        $data['movie'] = Movie::findOrFail($id)->load('category'); 
    
        return view('front.movie-details', $data);
    }
    
    public function tvshow($id)
    {
        $data['show'] = Shows::findOrFail($id)->load('category'); 
    
        return view('front.tvshow-details', $data);
    }
}