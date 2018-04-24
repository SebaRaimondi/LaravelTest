<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function index()
    {
        /*
        $title = 'Welcome to Laravel!';
        return view('pages/index', compact('title'));
        return view('pages/index')->with('title', $title);

        $data = array(
            'title' => $title,
            'services' => ['Web Design', 'Programming', 'SEO']
        );
        */
        return view('pages/index');
    }

    public function about()
    {
        return view('pages/about');
    }

    public function services()
    {
        $title = 'Services';
        $data = array(
            'title' => $title,
            'services' => ['Web Design', 'Programming', 'SEO']
        );
        return view('pages/services')->with($data);
    }
}
