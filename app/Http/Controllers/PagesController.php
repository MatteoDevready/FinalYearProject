<?php

namespace App\Http\Controllers;
//handle request thanks to line 5 that call the request library
use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function index(){
        $title = 'welcome to this test';
        return view('layouts.app')->with('title', $title);
    }

    public function foundation(){
        $title = 'welcome to this test';
        return view('layouts.foundation')->with('title', $title);
    }

    public function backup(){
        $title = 'welcome to this test';
        return view('layouts.backup')->with('title', $title);
    }

    public function about()
    {
        return view('navPages.about');
    }

    public function user()
    {
        return view('users.create');
    }
}
