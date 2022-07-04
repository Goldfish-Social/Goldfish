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
        $this->middleware(['auth', 'verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function home() {
        redirect('home');
    }
    public function landing() {
        return view('landing');
    }
    // Redirect /i to /i/web
    public function web() {
        return redirect()->route('home');
    }
    // Return about page view
    public function about() {
        return view('about.index');
    }
    // Return terms page view
    public function terms() {
        return view('about.terms');
    }
    // Return privacy page view
    public function privacy() {
        return view('about.privacy');
    }
    // Return guidelines page view
    public function guidelines() {
        return view('about.guidelines');
    }
    // Return contact page view
    public function contact() {
        return view('about.contact');
    }
}
