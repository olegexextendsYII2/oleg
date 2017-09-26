<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Portfolio;
use App\Categori;

class PortfolioController extends Controller
{
   public function index()
   {
      	$portfolios = Portfolio::all();

      	return view('index',['portfolios' => $portfolios]);			
   }

   public function create()
   {
     $categoris = Categori::all();
       
   		return view('create',['categoris' => $categoris]);
   }

  public function store(Request  $request)
   {
   		  
      
        $portfolio =  Portfolio::add($request->only(['title','content','categori_id']));
        
       	$portfolio->uploadImage($request->file('image'));

      	return redirect()->route('index');
   }

   public function edit($id)
   {
   	 	$portfolio = Portfolio::find($id);

   		return view('edit' , ['portfolio' =>$portfolio]);
   }

   public function update(Portfolio $portfolio , Request $request  )
   {
   		

   	   	$portfolio->edit($request->only(['title','content']));
   		
   		$portfolio->uploadImage($request->file('image'));

		return redirect('/');
   }
   
   public function crosOut($id)
   {
   		Portfolio::find($id)->remove();
   		return redirect()->route('index');
   }
   
}
