<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.home');
    }

    public function about()
    {
        return view('pages.about-us');
    }

    public function classes()
    {
        return view('pages.classes');
    }

    public function fee()
    {
        return view('pages.fee');
    }

    public function support()
    {
        return view('pages.support');
    }

    public function teacher()
    {
        return view('pages.teachers');
    }

}
