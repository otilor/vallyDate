<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BvnController extends Controller
{
    public function verify(Request $request)
    {
    	dd ( $request->all() );
    }
}
