<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Customer\CreateCustomerRequest;
use App\Http\Requests\Customer\UpdateCustomerRequest;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customers = Customer::query()->paginate(5);
        return view('admin.customers.index', compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateCustomerRequest $request)
    {
        $data = $request->validated();

        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $file_name = $file->getClientOriginalName();
            $file->storeAs('customers/img', $file_name, 'public_files');
            $data['img'] = $file_name;
        }

        Customer::create($data);

        $notification = array(
            'message' => 'مشتری جدید با موفقیت ایجاد شد.',
            'alert-type' => 'success'
        );

        return to_route('customers.index')->with($notification);
    }

    /**
     * Display the specified resource.
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Customer $customer)
    {
        $customers = Customer::query()->paginate(5);
        return view('admin.customers.edit', compact('customer', 'customers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCustomerRequest $request, Customer $customer)
    {
        $data = $request->validated();

        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $file_name = $file->getClientOriginalName();
            $file->storeAs('customers/img', $file_name, 'public_files');
            $data['img'] = $file_name;
        }

        $customer->update($data);

        $notification = array(
            'message' => 'مشتری با موفقیت ویرایش شد.',
            'alert-type' => 'success'
        );

        return to_route('customers.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Customer::findOrFail($id)->delete();

        $notification = array(
            'message' => 'مشتری مورد نظر با موفقیت حذف شد.',
            'alert-type' => 'success'
        );

        return to_route('customers.index')->with($notification);
    }
}
