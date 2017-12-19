<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Index';
        return view('pages.index')->with('title', $title);
    }

    public function about(){
        $data = array(
            'number' => 'Page Number',
            'electives' => ['Intelligent Systems', 'Programming Languages'],
            'title' => 'About'
        );
        return view('pages.about')->with('title')->with($data);
    }
}
