<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class SessionsController extends Controller
{

    function __construct()
    {
        return $this->middleware('guest', ['except' => 'destroy']);
    }
    
    function create()
    {
        $page_class = 'sessions_login';

        return view('sessions.login', compact('page_class'));

    }

    function store()
    {

        if (! auth()->attempt(request(['email', 'password'])))
        {
            return back()->withErrors([
                'message' => 'Check email and password and try again!'
            ]);
        }

        return redirect('/');

    }

    function destroy()
    {

        auth()->logout();

        return redirect('/');

    }

}
