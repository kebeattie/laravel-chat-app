<?php

namespace App\Livewire;

use App\Models\Conversations;
use App\Models\Messages;
use Illuminate\View\View;
use Livewire\Component;

class ChatWindow extends Component
{
    public Conversations $conversation;
    public $messages;
    public $newMessage;

    public function sendMessage(): void
    {
        Messages::create([
            'message' => $this->newMessage,
        ]);
    }
    public function mount($conversationId): void
    {
        $this->conversation = Conversations::find($conversationId);
        $this->messages = $this->conversation->messages()->oldest()->get();
    }

    public function render(): View
    {
        return view('livewire.chat-window');
    }
}
