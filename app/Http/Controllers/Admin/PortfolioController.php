<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Portfolio\CreatePortfolioRequest;
use App\Http\Requests\Portfolio\UpdatePortfolioRequest;
use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class PortfolioController extends Controller
{
    public function index()
    {
        $portfolios = Portfolio::query()->paginate(5);
        return view('admin.portfolios.index', compact('portfolios'));
    }

    public function create()
    {
        return view('admin.portfolios.create');
    }

    public function store(CreatePortfolioRequest $request)
    {
        $data = $request->validated();

        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $file_name = $file->getClientOriginalName();
            $file->storeAs('portfolios/img', $file_name, 'public_files');
            $data['img'] = $file_name;
        }

        $data['user_id'] = auth()->user()->id;

        Portfolio::create($data);

        $notification = array(
            'message' => 'نمونه کار جدید با موفقیت ایجاد شد.',
            'alert-type' => 'success'
        );

        return to_route('portfolios.index')->with($notification);
    }

    public function edit(Portfolio $portfolio)
    {
        return view('admin.portfolios.edit', compact('portfolio'));
    }

    public function update(UpdatePortfolioRequest $request, Portfolio $portfolio)
    {
        $data = $request->validated();

        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $file_name = $file->getClientOriginalName();
            $file->storeAs('portfolios/img', $file_name, 'public_files');
            $data['img'] = $file_name;
        }

        $portfolio->update($data);

        $notification = array(
            'message' => 'نمونه کار با موفقیت ویرایش شد.',
            'alert-type' => 'success'
        );

        return to_route('portfolios.index')->with($notification);
    }

    public function destroy($id)
    {
        Portfolio::findOrFail($id)->delete();

        $notification = array(
            'message' => 'نمونه کار مورد نظر با موفقیت حذف شد.',
            'alert-type' => 'success'
        );

        return to_route('portfolios.index')->with($notification);
    }
}
