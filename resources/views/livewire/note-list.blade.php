<div class="flex flex-col gap-4 h-full">
    <div class="px-6">
        <input autofocus type="text" wire:model.live="searchQuery" class="w-full px-4 py-2 text-gray-400 bg-gray-800 border-gray-900 focus:ring-gray-700 focus:ring-2 focus:outline-none rounded" placeholder="Search Notes...">
    </div>

    <div class="flex-1 text-white space-y-4 overflow-y-auto px-6 pb-4">
        @if($notes->isNotEmpty())
            @foreach($notes as $note)
                <article wire:key="{{ $note->id }}" class="space-y-1">
                    <div class="text-sm text-gray-400">{{ $note->created_at->format('M d, Y') }}</div>
                    <div class="text-gray-100 whitespace-pre">{{ $note->body }}</div>
                </article>
            @endforeach
        @else
            <div class="text-gray-400">No notes found.</div>
        @endif
    </div>
</div>
