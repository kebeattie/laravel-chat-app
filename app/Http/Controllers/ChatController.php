<?php

namespace App\Http\Controllers;

use App\Models\Conversations;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ChatController extends Controller
{
    public function show(Conversations $conversation): View
    {
//        dd($conversation);
        return view('chat.show', compact('conversation'));
    }
}
