<?php

namespace App\Livewire;

use App\Models\Conversations;
use App\Models\Messages;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ChatInput extends Component
{

    public $newMessage;
    public $conversationId;

    public function mount($conversationId)
    {
        $this->conversationId = $conversationId;
    }

    public function sendMessage()
    {
        $this->validate([
            'newMessage' => 'required|string'
        ]);
        $conversation = Conversations::find($this->conversationId);
        $receiverId = $conversation->participant1_id === Auth::id() ? $conversation->participant2_id : $conversation->participant1_id;

        $message = Messages::create([
            'conversations_id' => $this->conversationId,
            'sender_id' => Auth::id(),
            'receiver_id' => $receiverId,
            'message' => $this->newMessage,
        ]);

        $this->newMessage = '';
    }
    public function render()
    {
        return view('livewire.chat-input');
    }
}
