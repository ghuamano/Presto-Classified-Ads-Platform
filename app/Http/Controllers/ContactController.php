<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{

    function contacts() {
        return view('contatti');}



    public function submit(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string'
        ]);

        $data = $request->only('name', 'email', 'message');

        Mail::to('admin@presto.it')->send(new ContactMail($data));

        return back()->with('success', 'Messaggio inviato con successo!');
    }
}
