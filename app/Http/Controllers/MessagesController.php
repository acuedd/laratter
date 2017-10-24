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
		$image = $request->file("image");

	    $message = Message::create([
	    	"user_id" => $user->id,
	    	"content" => $request->input("message"),
		    "image" => $image->store("messages","public"),
	    ]);

	    return redirect("/messages/" .$message->id);
    }

    function search(Request $request)
    {
    	$query = $request->input("query");

    	//$messages = Message::with("user")->where("content","LIKE","%{$query}%")->get();
	    $messages = Message::search($query)->get();
	    $messages->load("user");
    	return view("Messages.index",[
    		"messages"=> $messages,
	    ]);
    }

    public function responses(Message $message)
    {
    	return $message->responses;
    }

}
