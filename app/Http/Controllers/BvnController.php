<?php

namespace App\Http\Controllers;

use App\Services\PaystackService\Bvn;
use App\Http\Requests\VerifyBvnRequest;

class BvnController extends Controller
{
	function __construct(Bvn $bvn)
	{
		$this->bvn = $bvn;
	}

    public function verify(VerifyBvnRequest $request)
    {
    	dd ($this->bvn->resolveBvn($request->bvn));
    }
}
