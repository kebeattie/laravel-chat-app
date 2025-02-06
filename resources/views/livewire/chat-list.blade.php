<div>
    @foreach($conversations as $conversation)
        <div class="conversation-item text-black">
{{--            <a href="{{ route('chat.show', $conversation->id) }}">--}}
                @if($conversation->messages()->count() > 0)
                    Conversation with: {{ $conversation->messages()->first()->receiver->name }}
                @else
                    No messages yet
                @endif
{{--            </a>--}}
        </div>
    @endforeach
</div>
