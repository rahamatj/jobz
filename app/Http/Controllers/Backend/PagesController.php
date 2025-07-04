<?php

namespace App\Http\Controllers\Backend;

use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('backend.home');
    }

    public function categories()
    {
        return view('backend.categories.index', [
            'categories'=> Category::all()
        ]);
    }
}
