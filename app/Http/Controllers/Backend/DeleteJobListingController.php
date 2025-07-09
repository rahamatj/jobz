<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DeleteJobListingController extends Controller
{
    public function __invoke()
    {
        // return redirect()->route('job-listings.index')->with('status', 'Job listing deleted successfully.');
    }
}
