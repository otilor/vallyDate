<?php

namespace App\Http\Controllers\Paystack;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\PaystackService\Bvn;

class PaystackController extends Controller
{
	function __construct(Bvn $bvn)
	{
		$this->bvn = $bvn;
	}

    public function index()
    {
    	// Test verification
    	return $this->bvn->resolveBvn(12345678901);
    }
}
