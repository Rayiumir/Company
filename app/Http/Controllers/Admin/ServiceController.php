<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Services\CreateServiceRequest;
use App\Models\Service;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::query()->paginate(5);
        return view('admin.services.index', compact('services'));
    }

    public function create()
    {
        return view('admin.services.create');
    }

    public function store(CreateServiceRequest $request)
    {
        $data = $request->validated();
        Service::create($data);

        $notification = array(
            'message' => 'بخش جدید با موفقیت ایجاد شد.',
            'alert-type' => 'success'
        );

        return to_route('services.index')->with($notification);
    }
}
