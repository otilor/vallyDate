<?php

namespace App\Http\Controllers;

use App\Services\AppServices\Bvn\ProcessesBvnDetails;
use App\Services\PaystackService\Bvn;
use App\Http\Requests\VerifyBvnRequest;

class BvnController extends Controller
{
	use ProcessesBvnDetails;
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

    	if ( ProcessesBvnDetails::isNameValid($resolvedBvn) )
    	{
    		auth()->user()->givePermission('view details');
    		return back()->with('success', 'Successfully verified your BVN!');
    	}
    }
}
