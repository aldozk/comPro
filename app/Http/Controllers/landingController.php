<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class landingController extends Controller
{
    public function index() {
        $title = 'Begin the search for your perfect domain name...';
        $desc = 'Please enter the characters you see in the image below into the text box provided. This is required to prevent automated submissions.';
        return view('landing',['title'=>$title,'desc'=>$desc]);

    } 
}
