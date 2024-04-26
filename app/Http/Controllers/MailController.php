<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MailController extends Controller
{
    public function contact()
	{
		return view('content.mail');
	}

	
}

