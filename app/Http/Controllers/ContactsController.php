<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function create(){
        return view ('confirmation');
    }

    public function store(Request $request)
    {
        
        $this->validate($request, [
            'email' => 'bail|required|email',
            'message' => 'bail|required|max:500'
        ]);
    
        $contact = new \App\Models\Contacts;
        $contact->email = $request->email;
        $contact->message = $request->message;
        $contact->save();
        
        
        return view('confirmation');
        
    }
    
    public function AccueilClient(){
        return view ('AcceuilClient');
    }
}
