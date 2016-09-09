<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class HelloWorld extends Controller
{
    public function hello()
	{	return view('helloworld');
	}
}
