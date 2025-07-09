<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\JobListing;

class SearchController extends Controller
{
    public function __invoke(Request $request)
    {
        $jobs = JobListing::where('title', 'like', '%'. $request->search .'%')->paginate(10);

        return view('frontend.jobs', [
            'jobs' => $jobs
        ]);
    }
}
