<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class AboutController extends Controller
{
    public function index()
    {
        return Inertia::render('About/Index');
    }
    public function privacy()
    {
        return Inertia::render('About/Privacy');
    }
    public function terms()
    {
        return Inertia::render('About/Terms');
    }
}
