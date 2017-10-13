<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMessageRequest;
use App\Message;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function show(Message $message)
    {
		//TODO search message by id
	    //crate a view for a message

	    return view("Messages.show",[
	    	"message" => $message,
	    ]);
    }

    public function create(CreateMessageRequest $request)
    {
    	$user = $request->user();

	    $message = Message::create([
	    	"user_id" => $user->id,
	    	"content" => $request->input("message"),
		    "image" => "http://lorempixel.com/600/338?". mt_rand(0,1000)
	    ]);

	    return redirect("/messages/" .$message->id);
    }

}
