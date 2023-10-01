<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactsController extends Controller
{
    function index()
    {
        $contacts = Contact :: all();

        return view("welcome",[
            "contacts" => $contacts
        ]);
    }

    function addContactsForm()
    {
        return view('addContactsForm');
    }

    function addContacts(Request $request)
    {
        $this->validate($request,[
            'first_name' => 'required|max:100',
            'last_name' => 'required|max:150',
            'email' => 'required|email',
        ]);
     
        $contact = new Contact();
        $contact->first_name = $request["first_name"];
        $contact->last_name = $request["last_name"];
        $contact->email = $request["email"];
        $contact->phone_number = $request["phone_number"];
        $contact->landline_number = $request["landline_number"];
        $contact->save();

        return redirect()->to("/");

    }
 
}

