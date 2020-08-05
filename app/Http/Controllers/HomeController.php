<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\AppServices\Job\JobService;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(JobService $jobService)
    {
        $this->middleware('auth');
        $this->jobService = $jobService;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $jobs = $this->jobService->getJobs();
        return view('home', compact('jobs'));
    }   
}
