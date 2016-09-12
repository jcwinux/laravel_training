<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class Septiembre extends Controller
{
    public function page_one ()
	{	return view('pages/pageone',['title'=>'1']);
		//return "Saludo a todos";
	}
	public function page_two ()
	{	return view('pages/pagetwo',['title'=>'2']);
	}
}
