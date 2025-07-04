<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\JobListing;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('frontend.home');
    }

    public function search(Request $request)
    {
        // dd($request->all());

        $jobs = JobListing::where('title', 'like', '%'. $request->search .'%')->paginate(10);

        return view('frontend.jobs', [
            'jobs' => $jobs
        ]);
    }

    public function category(Category $category)
    {
        $jobs = $category->jobListings()->orderBy('created_at', 'desc')->paginate(10);

        return view('frontend.jobs', [
            'jobs' => $jobs
        ]);
    }

    public function job(JobListing $job)
    {
        return view('frontend.job', [
            'job' => $job
        ]);
    }
}
