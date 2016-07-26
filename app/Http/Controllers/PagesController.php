<?php

namespace App\Http\Controllers;

use App\Post;


class PagesController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('created_at','desc')->limit(4)->get();
        return view('pages.welcome')->withPosts($posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getAbout()
    {
        $first = "sameer";
        $last = "shrestha";
        $full = $first . " " . $last;
        return view('pages.about')->with('fullname',$full);
    }

    public function getContact()
    {
        return view('pages.contact');
    }
}
