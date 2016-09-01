<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Mail;
use App\Http\Requests;

class ContactController extends Controller
{
    /**
     * Send a mail with the message to the email specified in the contact form
     *
     * @param  Request  $request
     * @return Response
     */
    public function sendMessage(Request $request)
    {
        $this->validate($request, [
            'name'     => 'required|min:3',
            'email' => 'required|email|max:255',
            'message'    => 'required'
        ]);

        $name = $request->input('name');
        $emailFrom = $request->input('email');
        $body = $request->input('message');

        Mail::send('emails.contact', ['body' => $body], function ($message) use ($name,$emailFrom) {
            $message->from($emailFrom, "From: {$name}");

            $message->to(email_to())->subject("Message from Contact Form");
        });

        return redirect()->route('contact')->with('info', "Your Message has been dispatched successfully");
    }

}
