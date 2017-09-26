<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Portfolio;
use App\Categori;

class categoriController extends Controller
{

	public function indexCategori()

	{
		    $categoris = Categori::all();
			return view('admin.index_categori' , ['categoris' => $categoris]);
	}	

	public function createCategori()
	{ 
		 $categoris = Categori::all();


         return view('admin.create_categori',['categoris' => $categoris]);
	}

	public function storeCategori( Request  $request)
	{
		$categori = new Categori();	
		$categori->fill($request->all())->save();
		//$categori-save()
		return redirect()->route('index');	
	}

	public function deleteCategori($id)
	{
		Categori::find($id)->remove();
		return redirect()->route('index');
	}
    //
}
