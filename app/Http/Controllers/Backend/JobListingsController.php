<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class JobListingsController extends Controller
{
    public function __invoke()
    {
        return view('backend.job-listings.index');
    }
}
