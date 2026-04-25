<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;


class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'service' => 'required',
            'message' => 'required',
        ]);

        Mail::to('contacter@construireservice.com')->send(new ContactFormMail($validated));

        return back()->with('success', 'Votre message a été envoyé avec succès !');
    }
}
