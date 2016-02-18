<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    public function about() {
    	return view('pages.about');
    }

    public function home() {
    	$people = ['Joe', 'Curly', 'Moe'];
    	return view('pages.welcome', compact('people'));
    }
}
