<?php

namespace App\Http\Controllers;

use App\Http\Requests\HRRequest;
use App\Models\Job;
use App\Services\AppServices\Job\JobService;
use App\Services\AppServices\Email\EmailService;
use Illuminate\Http\Request;    

class VerifyJobController extends Controller
{
    function __construct(Job $job, JobService $jobService, EmailService $emailService)
    {
        $this->middleware('auth');
        $this->job = $job;
        $this->jobService = $jobService;
        $this->emailService = $emailService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('jobs.verify.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(HRRequest $request)
    {
        //
        $this->emailService->sendMailToHR($request->hr_mail);
        return back()->with('success', 'Successfully Sent mail!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $job = $this->job->find($id);
        // todo: refactor later 
        $this->jobService->handleJobs($job);
       return view('jobs.verify.show', compact('job'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
