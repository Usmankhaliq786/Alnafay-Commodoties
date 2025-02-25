<?php

namespace App\Http\Controllers;
use App\Models\Blog;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function aboutalnfy(){
        return view('about-alnfay');
    }
    public function teamalnafay(){
        return view('team-alnafay');
    }
    public function license(){
        return view('license');
    }
    public function Ourblogs(){
        $blogs = Blog::latest()->take(6)->get();
        return view('blogs', compact('blogs'));
    }
    public function award(){
        return view('award');
    }
    public function event(){
        return view('event');
    }
}
