<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'message' => 'required|string',
        ]);

        Mail::send('emails.contact', ['data' => $request->all()], function ($message) use ($request) {
            $message->from($request->email, $request->name);
            $message->to('your-email@example.com')->subject('Contact Form Submission');
        });

        return redirect()->route('thankyou');
    }
}