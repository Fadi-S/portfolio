<?php

namespace App\Http\Controllers;

use App\Mail\ContactAttemptMail;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
//        return view('contact');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required|string|max:100',
            'last_name' => 'required|string|max:100',
            'email' => 'required|email|max:150',
            'phone' => 'required|string|max:20',
            'company' => 'nullable|string|max:100',
            'subject' => 'required|string|max:100',
            'message' => 'required|string',
        ]);

        $message = Message::create($validated);

//        Mail::to(["fady.sarwat377@gmail.com"])->send(new ContactAttemptMail($message));

        return response()->json(['message' => 'Message sent successfully!']);
    }
}
