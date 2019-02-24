<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Message;
use App\User;

class ChatsController extends Controller
{
    //
    public function __construct()
    {

    	$this->middleware('auth');

    }

    public function index()
    {

    	return view('chats');

    }

    public function fetchMessages()
    {
    	return Message::with(['user'])->get();
    }

    public function sendMessages(Request $request)
    {

    	auth()->user()->messages()->create([
    		'message' => $request->message
    	]);




    	return ['status','success'];

    }


}
