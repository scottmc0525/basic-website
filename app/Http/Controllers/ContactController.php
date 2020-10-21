<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function submit(ContactRequest $request){
        $message = new Message();
        $message->name = $request->input('name');
        $message->email = $request->input('email');
        $message->subject = $request->input('subject');
        $message->message = $request->input('message');
        $message->save();

        return redirect()->route('home')->with('success', 'Message successfully sent! Thank you!');
    }

    public function getMessages() {
        $messages = Message::all();
        return view('messages', ['messages' => $messages]);
    }
}
