<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\Models\Movie;
use \App\Models\Shows;
use \App\Models\MovieLink;
use \App\Models\Episode;

class FrontendController extends Controller
{
    public function index()
    {
        $data['new_movies'] = Movie::orderBy('created_at', 'desc')->get();
        $data['new_shows'] = Shows::orderBy('created_at', 'desc')->get();
        $data['top_movies'] = Movie::where('rating', '>', 7)
        ->orderBy('created_at', 'desc')->limit(8)
        ->get();
        $data['top_shows'] = Shows::where('rating', '>', 7)
        ->orderBy('created_at', 'desc')
        ->limit(8)
        ->get();
        $data['best_shows'] = Shows::where('popular', 1)->orderBy('created_at', 'desc')->get();

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


    public function moviedownload($id)
    {
        $data['movielinks'] = Movie::findOrFail($id)->load('movielink'); 
    
        return view('front.movie-download', $data);
    }

    public function tvshowdownload($id)
    {
        $data['tvshowlinks'] = Shows::findOrFail($id)->load('episode'); 
    
        return view('front.tvshow-download', $data);
    }
    
}