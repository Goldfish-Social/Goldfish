<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class ExploreController extends Controller
{
    public function index()
        {
            return Inertia::render('Explore/Index');
        }
}