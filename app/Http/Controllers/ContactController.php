<?php

namespace App\Http\Controllers;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'subject' => 'required|string',
            'message' => 'required|string',
        ]);

        Mail::to('gmaliellexi28@gmail.com')->send(new ContactFormMail($data));

        return back()->with('success', 'Pesan Anda Sudah Terkirim');
    }
}
