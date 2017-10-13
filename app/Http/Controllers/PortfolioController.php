<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Portfolio;
use App\Categori;

class PortfolioController extends Controller
{
	public function index()
	{
		
		return view('pages.index_page');
	}

	public function showPortfolio()
	{
		
		$portfolios = Portfolio::all();
		
		return view('pages.show_portfolio' , ['portfolios' => $portfolios]);
	}

	public function about()
	{
		return view('pages.about_me');
	}

	public function showCategory($id)
	{

		$category = Categori::find($id);

		$portfolios = $category->portfolio;

		// foreach ($portfolios as $portfolio) {
		// 	dd($portfolio->portfolio);
		// }
		return view('pages.show_category'  , ['portfolios' => $portfolios ]);	
	}
    //
}
