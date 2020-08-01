<?php

namespace App\Services\AppServices\Job;
use Cache;
/**
 * Job service class
 */
class JobService
{
	
	public function __construct()
	{
		# code...
	}

	public function getJobs()
	{
		$jobs = Cache::remember("jobs", 100, function () {
			return auth()->user()->jobs;	
		});
		return $jobs;
	}
}