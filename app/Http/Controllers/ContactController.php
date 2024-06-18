<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        // Process the contact form submission (e.g., send an email)
        return redirect()->back()->with('success', 'Your message has been sent!');
    }
}
