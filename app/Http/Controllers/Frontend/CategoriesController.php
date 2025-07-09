<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoriesController extends Controller
{
    public function __invoke(Category $category)
    {
        $jobs = $category->jobListings()->orderBy('created_at', 'desc')->paginate(10);

        return view('frontend.jobs', [
            'jobs' => $jobs
        ]);
    }
}
