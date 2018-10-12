<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RegistrationController extends Controller
{
    public function create()
    {

        $page_class = 'register_create';

        return view('sessions.create', compact('page_class'));

    }

    public function store()
    {

        $this->validate(request(), [

            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed'

        ]);

        $user = User::create(request(['name', 'email', 'password']));

        auth()->login($user);

        return redirect('/');

    }
}
