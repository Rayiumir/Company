<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use App\Models\PortfolioCategory;
use App\Models\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $service = Service::query()->latest()->get();
        $portfolios = Portfolio::query()->latest()->get();
        $categories = PortfolioCategory::query()->latest()->get();
        return view('home.index', compact('service', 'portfolios', 'categories'));
    }
}
