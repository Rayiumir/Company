<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function store(LoginRequest $request){
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            return to_route('admin.index');
        }
    }
}
