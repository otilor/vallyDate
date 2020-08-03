<?php

namespace App\Services\AppServices\Job;
use Cache;
use Str;
/**
 * Job service class
 */
class JobService
{
	
	public function __construct()
	{
		# code...
	}
	public function handleJobs($job)
	{
		if (! is_null($job)) {
            $job->setAttribute('duration', $job->from . " to " . $job->to);
            $job->setAttribute('validation_token', Str::random(16));
        } else {
            return redirect('/');
        }
	}
	public function getJobs()
	{
		$jobs = Cache::remember("jobs", 3, function () {
			return auth()->user()->jobs;
		});
		return $jobs;
	}
}
