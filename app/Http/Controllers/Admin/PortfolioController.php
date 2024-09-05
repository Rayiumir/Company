<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Portfolio\CreatePortfolioRequest;
use App\Models\Portfolio;
use Illuminate\Http\Request;

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
}
