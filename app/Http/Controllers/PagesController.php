<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        $title = "Welcome to Crowd Funding";
        return view('pages.index')->with('title', $title);
    }

    public function project() {
        $title = "Welcome to Crowd Funding";
        return view('pages.project')->with('title', $title);
    }
}
