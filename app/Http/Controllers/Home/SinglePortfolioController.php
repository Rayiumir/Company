<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use App\Models\PortfolioCategory;
use Illuminate\Http\Request;

class SinglePortfolioController extends Controller
{
    public function show($slug)
    {
        $portfolio = Portfolio::where('slug', $slug)->firstOrFail();
        return view('portfolios.single', compact('portfolio'));
    }
}
