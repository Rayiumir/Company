<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\CreateUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::query()->paginate(5);
        return view('admin.users.index', compact('users'));
    }

    public function create()
    {
        return view('admin.users.create');
    }

    public function store(CreateUserRequest $request)
    {
        $data = $request->validated();
        $data['password'] = Hash::make('password');
        User::create($data);

        $notification = array(
            'message' => 'کاربر جدید با موفقیت ایجاد شد.',
            'alert-type' => 'success'
        );

        return to_route('users.index')->with($notification);
    }
}
