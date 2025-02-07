<div class="chat-window">
    <div class="messages">
        @foreach($messages as $message)
            <div class="message">
                <strong>{{ $message->name }}:</strong> {{ $message->message }}
            </div>
        @endforeach
    </div>

    <textarea wire:model="newMessage" placeholder="Type a message..."></textarea>
{{--    <button wire:click="sendMessage">Send</button>--}}
</div>
