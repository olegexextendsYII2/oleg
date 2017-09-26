<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Portfolio;
use App\Categori;

class categoriController extends Controller
{


	public function createCategori()
	{
       $categori = Categori::all();
       dd($categori);
	}

	public function deleteCategori()
	{

	}
    //
}
