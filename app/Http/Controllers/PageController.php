<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePageRequest;
use App\Http\Requests\UpdatePageRequest;
use App\Models\Page;

class PageController extends Controller
{
    public function index()
    {
        // Return create pages view
        return view('pages.index');
    }

    public function create()
    {
        // Return create pages view
        return view('pages.create');
    }

    
}
