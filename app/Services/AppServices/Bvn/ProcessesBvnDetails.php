<?php

namespace App\Services\AppServices\Bvn;

use App\Helpers\String;

/**
 * Process Bvn after getting details from Paystack API
 */
trait ProcessesBvnDetails
{
	public static function isNameValid($bvnDetails) : bool
	{
		$name = self::getFullNameFromBvnDetails($bvnDetails);
	}

	private static function getFullNameFromBvnDetails($bvnDetails) : string
	{
		$firstName = $bvnDetails->data->first_name;
		$lastName = $bvnDetails->data->last_name;

		return String::getFullName($firstName, $lastName);
	}
}
