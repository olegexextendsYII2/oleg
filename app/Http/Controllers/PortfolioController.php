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

		
		return view('pages.show_category'  , ['portfolios' => $portfolios,
												'category' => $category ]);	
	}

	public function showDescription($id)
	{
		
		$portfolio = Portfolio::find($id);

		return view('pages.show_full_description' , ['portfolio' => $portfolio]);

	}


	public function contact()
	{
		
		

		return view('pages.contact');

	}

	


    //
}
