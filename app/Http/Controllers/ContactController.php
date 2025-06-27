<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class ContactController extends Controller
{
/*************  ✨ Windsurf Command ⭐  *************/
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
/*******  38232a97-9008-495b-905f-6453309257f9  *******/    public function index()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'phone' => 'nullable',
            'subject' => 'required',
            'message' => 'required',
        ]);

        Contact::create($validated);

        // Send email
        Mail::to('neorozatech@gmail.com')->send(new ContactFormMail($validated));

        return back()->with('success', 'Pesan terkirim! Kami akan segera merespon.');
    }
}