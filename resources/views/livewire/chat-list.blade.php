<div class="flex flex-col items-center space-y-3">
    @foreach($conversations as $conversation)
        <a href="{{ route('chat.show', $conversation->id) }}" class="w-full md:w-96">
            @if($conversation->messages()->count() > 0)
                <div class="bg-gray-700 rounded-lg p-3 flex items-center gap-3 hover:bg-gray-600 transition duration-200">

                    <div class="bg-white rounded-full p-1">
                        <img width="50" height="50" class="rounded-full"
                             src="https://media.istockphoto.com/id/1300845620/vector/user-icon-flat-isolated-on-white-background-user-symbol-vector-illustration.jpg?s=2048x2048&w=is&k=20&c=6hQNACQQjktni8CxSS_QSPqJv2tycskYmpFGzxv3FNs="
                             alt="User Avatar"/>
                    </div>

                    <div class="flex flex-col">
                        <span class="text-white font-medium">{{ $conversation->messages()->first()->receiver->name }}</span>
                        <span class="text-sm text-gray-300">{{ $conversation->messages()->first()->message }}</span>
                    </div>
                </div>
            @else
                <div class="text-gray-400 text-sm text-center">No messages yet</div>
            @endif
        </a>
    @endforeach
</div>

