<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
	// Get All Jobs
	
	public static function getAllJobs(){
		$jobs = Job::all();
		return $jobs;
	}
}
