<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Services\CreateServiceRequest;
use App\Http\Requests\Services\UpdateServiceRequest;
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

    public function edit(Service $service)
    {
        return view('admin.services.edit', compact('service'));
    }

    public function update(UpdateServiceRequest $request, Service $service)
    {
        $service->update(
            $request->validated()
        );

        $notification = array(
            'message' => 'بخش  مورد نظر با موفقیت ویرایش شد.',
            'alert-type' => 'success'
        );

        return to_route('services.index')->with($notification);
    }

    public function destroy($id)
    {
        Service::findOrFail($id)->delete();

        $notification = array(
            'message' => 'بخش مورد نظر با موفقیت حذف شد.',
            'alert-type' => 'success'
        );

        return to_route('services.index')->with($notification);
    }
}
