<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\CreatePostRequest;
use App\Http\Requests\Post\UpdatePostRequest;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::query()->paginate(5);
        return view('admin.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.posts.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreatePostRequest $request)
    {
        $data = $request->validated();

        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $file_name = $file->getClientOriginalName();
            $file->storeAs('posts/img', $file_name, 'public_files');
            $data['img'] = $file_name;
        }

        $data['user_id'] = auth()->user()->id;

        Post::create($data);

        $notification = array(
            'message' => 'پست جدید با موفقیت ایجاد شد.',
            'alert-type' => 'success'
        );

        return to_route('posts.index')->with($notification);
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        $categories = Category::all();
        return view('admin.posts.edit', compact('post', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        $data = $request->validated();

        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $file_name = $file->getClientOriginalName();
            $file->storeAs('portfolios/img', $file_name, 'public_files');
            $data['img'] = $file_name;
        }

        $post->update($data);

        $notification = array(
            'message' => 'پست با موفقیت ویرایش شد.',
            'alert-type' => 'success'
        );

        return to_route('posts.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Post::findOrFail($id)->delete();

        $notification = array(
            'message' => 'پست مورد نظر با موفقیت حذف شد.',
            'alert-type' => 'success'
        );

        return to_route('posts.index')->with($notification);
    }
}
