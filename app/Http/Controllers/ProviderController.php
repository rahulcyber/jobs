<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ProviderController extends Controller
{
    function myJobs()
    {
        return view('provider.jobs.my-jobs');
    }
}
