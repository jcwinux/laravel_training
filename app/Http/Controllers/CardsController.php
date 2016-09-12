<?php

namespace App\Http\Controllers;

use App\Card;
use App\Http\Requests;
use Illuminate\Http\Request;

class CardsController extends Controller
{	public function index()
	{ 	$cards = Card::all();
		$parameters = ['title'=>'Consulta todos los registros','cards'=>$cards];
		return view('cards.index',$parameters);
	}
	
	/*public function show($id)
	{	$card = Card::find($id);
		$parameters = ['title'=>'Consulta un registro','card'=>$card];
		return view('cards.show',$parameters);
	}*/
	
	public function show(Card $card)
	{	$parameters = ['title'=>'Consulta un registro','card'=>$card];
		return view('cards.show',$parameters);
	}
}