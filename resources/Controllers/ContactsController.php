<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ContactsController extends Controller
{

    function __construct()
    {
        $this->middleware('auth', ['except' => ['create', 'store']]);
    }

    public function create()
    {

        $page_class = 'contacts_create';

        return view('contacts.create', compact('page_class'));

    }

    public function show()
    {
        $contacts = Contact::latest()->get();

        $page_class = 'contacts_show';

        return view('contacts.show', compact(['page_class', 'contacts']));

    }

    public function detail(Contact $contact)
    {
        
        $page_class = 'contacts_detail';

        return view('contacts.detail', compact(['page_class', 'contact']));

    }

    public function store()
    {

        $this->validate(request(), [
            'name' => 'required',
            'subject' => 'required',
            'message' => 'required'
        ]);

        Contact::create([
            'name' => request('name'),
            'subject' => request('subject'),
            'email' => request('Email'),
            'message' => request('message')
        ]);

        return redirect('/');

    }
}
