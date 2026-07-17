<div>
    {{-- The Master doesn't talk, he acts. --}}
    <div wire:poll.10s="updateUnreadCount" x-data="{ count: @entangle('unreadCount') }">
        <span x-show='count > 0' x-text='count' class="bg-red-500 text-white px-2 py-1 rounded-full">
            {{-- {{ $unreadCount }} --}}
        </span>
    </div>
</div>
