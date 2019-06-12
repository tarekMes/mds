<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactMessageController extends Controller
{
    public function create()
    {
        return;
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required'
        ]);

        Mail::send('emails.contact-message', [
            'msg' => $request->subject
        ], function ($message) use ($request) {
            $message->from($request->email, $request->name);
            $message->sender($request->email, $request->name);
            $message->to('cs@mds-express.com', 'cs');
            $message->replyTo('john@johndoe.com', 'John Doe');
            $message->subject('mds contact');
        });
        return redirect()->back()->with('flash_message', 'Merci pour votre confidence.');
    }
}
