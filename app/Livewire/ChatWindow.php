<?php

namespace App\Livewire;

use App\Models\Conversations;
use Livewire\Component;

class ChatWindow extends Component
{
    public $conversation;
    public $messages;

    public function mount($conversationId)
    {
        $this->conversation = Conversations::find($conversationId);
        $this->messages = $this->conversation->messages()->latest()->get();
    }

    public function render()
    {
        return view('livewire.chat-window');
    }
}
