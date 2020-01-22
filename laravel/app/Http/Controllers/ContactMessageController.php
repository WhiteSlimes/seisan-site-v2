<?php

namespace App\Http\Controllers;
use Mail;
use Illuminate\Http\Request;

class ContactMessageController extends Controller
{
    public function create()
    {
        return view('contact/contact ');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
           'name' => 'required',
           'email' => 'required|email',
           'messahe' => 'required',
        ]);

        Mail::send('emails.contact-message', [
            'msg' => $request->message
        ], function ($mail) use($request) {
            $mail->from($request->email, $request->name);

            $mail-to('thomas.malbec@ynov.com')->subject('Seisan_contact');
        });

        return redirect()->back()->with('flash_message', 'Merci pour votre message.');
    }
}
