<?php

namespace App\Http\Controllers\Site;

use App\Contact;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContactFormRequest;
use App\Notifications\NewContact;
use Illuminate\Support\Facades\Notification;


class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Site.contact.index');
    }

     public function form(ContactFormRequest $request)
    {
        
        $contact = Contact::create($request->all());

        Notification::route('mail', config('mail.from.address'))
            //->route('nexmo', '5555555555')
            ->notify(new NewContact($contact));
        
            toastr()->success('O contato foi enviado com suceso!');
            return back();
            
    }
    
} 