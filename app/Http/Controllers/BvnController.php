<?php

namespace App\Http\Controllers;

use App\Services\AppServices\Bvn\ProcessesDetails;
use App\Services\PaystackService\Bvn;
use App\Http\Requests\VerifyBvnRequest;

class BvnController extends Controller
{
	use ProcessesDetails;
	function __construct(Bvn $bvn)
	{
		$this->bvn = $bvn;
	}

    public function verify(VerifyBvnRequest $request)
    {
    	$resolvedBvn = $this->bvn->resolveBvn($request->bvn);
    	if ( $resolvedBvn->status  === false )
    	{
    		return back()->withErrors("Invalid BVN!");
    	}

    	if ( ProcessesDetails::isNameValid($resolvedBvn) )
    	{
    		return back()->with('success', 'Successfully verified your BVN!');
    	}
    }
}
