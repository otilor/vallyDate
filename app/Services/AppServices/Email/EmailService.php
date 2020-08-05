<?php
namespace App\Services\AppServices\Email;

use App\Mail\HRMail;
use Illuminate\Support\Facades\Mail;

/**
 *  Email service class that handles all operations concerning emails.
 */
class EmailService
{
	
	function __construct(Mail $mail)
	{
		$this->mail = $mail;
	}

	public function sendMailToHR($email)
	{
		return $this->mail::to($email)->send(new HRMail);
	}
}