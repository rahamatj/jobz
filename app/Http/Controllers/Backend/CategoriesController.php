<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoriesController extends Controller
{
    public function __invoke()
    {
        return view('backend.categories.index', [
            'categories'=> Category::latest()->get()
        ]);
    }
}
