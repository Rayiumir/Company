<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Section;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }
}
