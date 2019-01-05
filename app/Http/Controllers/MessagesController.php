<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use App\Message;

class MessagesController extends Controller
{
    public function submit(Request $request){
        $this->validate($request, [
            'email' => 'required',
            'message' => 'required'
        ]);

        //Create New Message
        $message = new Message;

        $message->email = $request->input('email');
        $message->message = $request->input('message');

        //Save Message
        $message->save();

        //Redirect
        return redirect('/')->with('success', 'Message Sent !');


    }
}
