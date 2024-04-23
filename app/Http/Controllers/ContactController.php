<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactUserMail;
use App\Mail\ContactAdminMail;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();
        return view('admins.contacts.index', compact('contacts'));
    }

    public function create()
    {
        return view('users.contacts.create');
    }

    public function send(ContactRequest $request)
    {
        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'content' => $request->content,
            'status' => false
        ]);

        $contact = $request->all();
        Mail::to($request->email)->send(new ContactUserMail($contact));
        Mail::to('kobatonnao@gmail.com')->send(new ContactAdminMail($contact));

        return view('users.contacts.thanks');
    }
}
