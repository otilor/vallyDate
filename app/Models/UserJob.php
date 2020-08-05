<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserJob extends Model
{
   //
	protected $guarded = [];
	
	public function getVerifiedAttribute($value)
	{
		if ($value === 1)
		{
            return "Verified!";
		} else {
			return "Unverified!";
		}
	}
	
}
