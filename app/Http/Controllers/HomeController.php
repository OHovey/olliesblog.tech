<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blog = new Blog();

        

        if (request('month'))
        {
            $blogs = Blog::latest()
                ->filter(request(['month', 'year']))
                ->get();

            if ($page = request('page'))
            {
                $index_start = (int)$page * 20;
                $cols = $blog->get_home_display($blogs, $index_start);
                $page_no = (int)$page;
            }
            else 
            {
                $cols = $blog->get_home_display($blogs);
                $page_no = 1;
            }

            $requests = [];
            $requests['month'] = request('month');
            $requests['year'] = request('year');

        }
        else
        {

            $blogs = Blog::latest()->get();
            if ($page = request('page'))
            {
                $index_start = (int)$page * 20;
                $cols = $blog->get_home_display($blogs, $index_start);
                $page_no = (int)$page;
                $requests = [];
            }
            else 
            {
                $cols = $blog->get_home_display($blogs);
                $page_no = 1;
                $requests = '';
            }

        }

        $archives = Blog::selectRaw('year(created_at) year, monthname(created_at) month,
                                     count(*) published')
                                     ->groupBy('year', 'month')
                                     ->orderByRaw('min(created_at) desc')
                                     ->get()
                                     ->toArray();
    
        $page_count = ceil(count($blogs) / 20);
        $blog_num = count($blogs);

        $page_class = 'home';

        return view('main.main', compact(['page_class',
                                          'cols', 
                                          'archives', 
                                          'page_count', 
                                          'requests',
                                          'page_no',
                                          'blog_num']));
    }
}
