<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\JobListing;

class JobListingsController extends Controller
{
    public function __invoke(JobListing $job)
    {
        return view('frontend.job', [
            'job' => $job
        ]);
    }
}
