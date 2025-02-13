<div class="p-3 bg-gray-900 rounded-b-lg flex items-center gap-3">
    <textarea wire:model="newMessage"
              class="w-full p-2 text-white bg-gray-800 rounded-lg resize-none focus:outline-none focus:ring-2 focus:ring-blue-500"
              placeholder="Type a message..." rows="2"></textarea>

    <button wire:click="sendMessage"
            class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-lg transition duration-200">
        Send
    </button>
</div>
