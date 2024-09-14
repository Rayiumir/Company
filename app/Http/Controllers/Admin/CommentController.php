<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if(isset($request->approved)){
            $comments = Comment::where('is_approved', !! $request->approved)->with(['user', 'post'])->withCount('replies')->paginate();
        }else{
            $comments = Comment::with(['user', 'post'])->withCount('replies')->paginate();
        }
        return view('admin.comments.index', compact('comments'));
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comment $comment)
    {
        $comment->update([
            'is_approved' => ! $comment->is_approved
        ]);

        $notification = array(
            'message' => 'وضعیت نظر با موفقیت تغییر کرد.',
            'alert-type' => 'success'
        );

        return to_route('comments.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Comment::findOrFail($id)->delete();

        $notification = array(
            'message' => 'نظر مورد نظر با موفقیت حذف شد.',
            'alert-type' => 'success'
        );

        return to_route('comments.index')->with($notification);
    }
}
