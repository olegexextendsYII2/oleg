<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Portfolio;
use App\Categori;

class CategoryController extends Controller
{

	public function index()

	{
		    $categorys = Categori::all();
			return view('admin.index_category' , ['categorys' => $categorys]);
	}	

	public function create()
	{ 
		 $categoris = Categori::all();


         return view('admin.create_categori',['categoris' => $categoris]);
	}

	public function show($id)
	{
		 $category = Categori::find($id);

		return view('admin.show_category', ['category' => $category]);	
	}

	public function store( Request  $request)
	{
		$categori = new Categori();	
		$categori->fill($request->all())->save();
		//$categori-save()
		return redirect()->route('category.index');	
	}

	public function destroy( $id)
	 {
	 	// 
		$category =  Categori::find($id);

		//  $portfolios = $category->portfolio;
		// foreach ($portfolios as $portfolio) {
		// 	$portfolio->remove();
		// 	# code$...
		// }
		$category->remove();
		return redirect()->route('category.index');
	}
    //
}
