<?php

namespace App\Livewire;

use App\Models\Conversations;
use App\Models\Messages;
use Illuminate\Support\Collection;
use Illuminate\View\View;
use Livewire\Component;

class ChatList extends Component
{
    public Collection $conversations;
    public string $displayMessage;

    public function mount(): void
    {
        $this->conversations = Conversations::with(['messages.sender', 'messages.receiver'])
            ->where('participant1_id', auth()->id())
            ->orWhere('participant2_id', auth()->id())
            ->get();
    }

    public function getChatPartner($conversation): string
    {
        $firstMessage = $conversation->messages->first();
        $this->displayMessage = $conversation->messages->first()->message;

        if (!$firstMessage) {
            $this->displayMessage = 'No messages found';
        }

        return auth()->id() === $firstMessage->receiver_id
            ? $firstMessage->sender->name
            : $firstMessage->receiver->name;
    }

    public function render(): View
    {
        return view('livewire.chat-list');
    }
}
