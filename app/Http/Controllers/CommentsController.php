<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;

class CommentsController extends Controller
{

    function __construct()
    {
        $this->middleware('auth', ['except' => 'store']);
    }

    public function store(Request $request)
    {


        if ($request->ajax())
        {

            $comment = Comment::create([
                'name' => $request->name,
                'body' => $request->comment,
                'blog_id' => $request->blog_id
            ]);

        }

        return null;

    }

    public function destroy(Comment $comment)
    {

        $comment->destroy($comment->id);

        return back();

    }
}
