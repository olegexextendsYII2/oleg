<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Portfolio;
use App\Categori;

class DashboardController extends Controller
{
    public function index()
    {
    	$portfolios = Portfolio::all();
    	return view('admin.home_page_admin',['portfolios' => $portfolios]);
    }
}
