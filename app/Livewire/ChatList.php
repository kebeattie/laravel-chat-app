<?php

namespace App\Livewire;

use App\Models\Conversations;
use Illuminate\Support\Collection;
use Illuminate\View\View;
use Livewire\Component;

class ChatList extends Component
{
    public Collection $conversations;

    public function mount(): void
    {
        $this->conversations = Conversations::where('sender_id', auth()->id())->get();

    }
    public function render(): View
    {
        return view('livewire.chat-list');
    }
}
