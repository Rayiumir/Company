<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\CreateUserRequest;
use App\Http\Requests\User\UpdateUserRequest;
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

    public function edit(User $user)
    {
        return view('admin.users.edit', compact('user'));
    }

    public function update(UpdateUserRequest $request, User $user)
    {
        $user->update(
            $request->validated()
        );

        $notification = array(
            'message' => 'کاربر مورد نظر با موفقیت ویرایش شد.',
            'alert-type' => 'success'
        );

        return to_route('users.index')->with($notification);
    }

    public function destroy($id)
    {
        User::findOrFail($id)->delete();

        $notification = array(
            'message' => 'کاربر مورد نظر با موفقیت حذف شد.',
            'alert-type' => 'success'
        );

        return to_route('users.index')->with($notification);
    }
}
