<div class="chat-window bg-gray-800 w-full md:w-96 rounded-lg shadow-lg p-4 flex flex-col">
    <div class="messages space-y-3 overflow-y-auto h-96 p-2">
        @foreach($messages as $message)
            <div class="message flex items-start gap-3 p-2 rounded-lg
                {{ $message->sender_id === auth()->id() ? 'bg-blue-500 ml-auto text-white' : 'bg-gray-700 text-gray-300' }}">
                <strong class="font-medium">{{ $message->name }}</strong>
                <span>{{ $message->message }}</span>
            </div>
        @endforeach
    </div>

    <div class="mt-auto">
        @livewire('chat-input', ['conversationId' => $conversation->id])
    </div>
</div>
