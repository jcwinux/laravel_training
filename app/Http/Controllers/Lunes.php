<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class Lunes extends Controller
{
    public function principal()
	{	return view('first',['title'=>'This page is called First']);
	}
}
