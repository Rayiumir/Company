<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Portfolio\CreatePortfolioCategoryRequest;
use App\Http\Requests\Portfolio\UpdatePortfolioCategoryRequest;
use App\Models\PortfolioCategory;

class PortfolioCategoryController extends Controller
{
    public function index()
    {
        $portfolioCategory = PortfolioCategory::query()->paginate();
        return view('admin.portfolioCategory.index', compact('portfolioCategory'));
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

    public function edit(PortfolioCategory $portfolioCategory)
    {
        return view('admin.portfolioCategory.edit', compact('portfolioCategory'));
    }

    public function update(UpdatePortfolioCategoryRequest $request, PortfolioCategory $portfolioCategory)
    {
        $portfolioCategory->update(
            $request->validated()
        );

        $notification = array(
            'message' => 'دسته بندی با موفقیت ویرایش شد.',
            'alert-type' => 'success'
        );

        return to_route('portfolioCategory.index')->with($notification);
    }

    public function destroy($id)
    {
        PortfolioCategory::findOrFail($id)->delete();

        $notification = array(
            'message' => 'دسته مورد نظر با موفقیت حذف شد.',
            'alert-type' => 'success'
        );

        return to_route('portfolioCategory.index')->with($notification);
    }
}
