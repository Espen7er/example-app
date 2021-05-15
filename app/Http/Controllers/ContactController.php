<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\TestEmail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index(Request $request) 
	{
		$data = [
		'message' => $request->get('contactMessage'),
		'name'=> $request->get('contactName'),
		'email'=> $request->get('contactEmail')
		];
		Mail::to('sharaevskimax@gmail.com')->send(new TestEmail($data));
		return 'success';
	}
}



