<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Blog;

class BlogsController extends Controller
{

    function __construct()
    {
        $this->middleware('auth', ['except' => 'detail']);
    }
    
    function detail(Blog $blog)
    {
        $comment = new Comment();

        $comments = $comment->blog_comments($blog->id);

        $archives = Blog::selectRaw('year(created_at) year, monthname(created_at) month,
                                     count(*) published')
                                     ->groupBy('year', 'month')
                                     ->orderByRaw('min(created_at) desc')
                                     ->get()
                                     ->toArray();

        $page_class = 'blog_detail';

        return view('blogs.detail', compact(['blog', 'comments', 'blog_detail', 'archives', 'page_class']));

    }

    public function create()
    {

        $page_class = 'blog_create';

        return view('blogs.create', compact('page_class'));

    }

    function store(Request $request)
    {

        $this->validate(request(), [
            'title' => 'required',
            'body' => 'required',
        ]);

        $blog = new Blog;
        $blog->title = $request->title;
        $blog->body = $request->body;
        $blog->img_src = $request->img_tags;
        $blog->keywords = $request->keywords;

        if ($request->hasFile('img_src'))
        {
            $image = $request->File('img_src');
            $filename = time() . '.' . $image->getClentOriginalExtension();
            $location = public_path('images/' . $filename);
            Image::make($image)->save($location);

            $blog->img_src = $filename;
        }

        $blog->save();

        return redirect('/');

    }

    public function destroy(Blog $blog)
    {

        $blog->delete();

        return redirect('/');

    }

}
