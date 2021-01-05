<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        $title = 'Home';
        //return view('pages.index', compact('title'));
        return view('pages.index')->with('title', $title);
    }
    
    public function hotel() {
        $title = 'Welcome to Our Hotel !!!';
        //return view('pages.index', compact('title'));
        return view('pages.hotel')->with('title', $title);
    }

    public function spa() {
        $title = 'Welcome to Our Spa !!!';
        //return view('pages.spa', compact('title'));
        return view('pages.spa')->with('title', $title);
    }

    public function estate() {
        $title = 'Welcome to Our Estate !!!';
        //return view('pages.estate', compact('title'));
        return view('pages.estate')->with('title', $title);
    }
    
    public function decoration() {
        $title = 'Welcome to Our Decoration !!!';
        //return view('pages.decoration', compact('title'));
        return view('pages.decoration')->with('title', $title);
    }
    
    public function fashion() {
        $title = 'Welcome to Our Fashion !!!';
        //return view('pages.fashion', compact('title'));
        return view('pages.fashion')->with('title', $title);
    }
}
