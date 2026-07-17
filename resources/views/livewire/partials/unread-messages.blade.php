<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <div wire:poll.10s="updateUnreadCount" x-data="{ count: @entangle('unreadCount') }">
        <span x-show='count > 0' x-text='count' class="bg-red-500 text-white px-2 py-1 rounded-full">
            {{-- {{ $unreadCount }} --}}
        </span>
    </div>
</div>
