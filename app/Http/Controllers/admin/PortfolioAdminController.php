<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Portfolio;
use App\Categori;

class PortfolioAdminController extends Controller
{
   public function index()
   {
      	$portfolios = Portfolio::all();

      	return view('admin.index_portfolio',['portfolios' => $portfolios]);			
   }

   public function create()
   {


     $categoris = Categori::all();
       
   		return view('admin.portfolio_create',['categoris' => $categoris]);
   }

  public function store(Request  $request)
   {
   		  
        $this->validate($request, [
         'title' => 'required',
         'content' => 'required',
    
]);
        $portfolio =  Portfolio::add($request->only(['title','content','categori_id']));
        
       	$portfolio->uploadImage($request->file('image'));

      	return redirect()->route('portfolio.index');
   }

    public function show($id)
    {
      $portfolio = Portfolio::find($id);

       return view('admin.show_portfolio', ['portfolio' => $portfolio]);
    }

   public function edit($id)
   {
   	 	$portfolio = Portfolio::find($id);

      $categoris = Categori::all();

   		return view('admin.portfolio_edit' , ['portfolio' =>$portfolio,
                                  'categoris' => $categoris]);
   
   }



   public function update( $id, Request $request  )
   {
       //dd($request);
   		$portfolio = Portfolio::find($id);

   	  $portfolio->edit($request->only(['title','content','categori_id']));
   		
   		$portfolio->uploadImage($request->file('image'));

		return redirect()->route('portfolio.index');
   }
   
   public function destroy( $id)
   {
   		Portfolio::find($id)->remove();

   		return redirect()->route('portfolio.index');
   }
   
}
