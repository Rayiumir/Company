<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Portfolio\CreatePortfolioCategoryRequest;
use App\Models\PortfolioCategory;
use Illuminate\Http\Request;

class PortfolioCategoryController extends Controller
{
    public function index()
    {
        $PortfolioCategories = PortfolioCategory::with('parent')->paginate();
        $CategoryParent = PortfolioCategory::where('portfolio_category_id', null)->get();
        return view('admin.portfolios.category.index', compact('PortfolioCategories', 'CategoryParent'));
    }

    public function create()
    {
        //
    }

    public function store(CreatePortfolioCategoryRequest $request)
    {
        $data = $request->validated();

        PortfolioCategory::create($data);

        $notification = array(
            'message' => 'دسته بندی جدید با موفقیت ایجاد شد.',
            'alert-type' => 'success'
        );

        return back()->with($notification);
    }
}
