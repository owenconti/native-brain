<form wire:submit="submit" class="flex-1 flex flex-col px-6 pb-6">
    <textarea wire:model="form.body" class="flex-1 resize-none bg-transparent text-white focus:outline-none" autofocus></textarea>
    <div class="flex justify-end">
        <button type="submit" class="px-2 py-1 text-base rounded border-gray-700 border bg-gray-800 text-gray-400 hover:gray-700 hover:text-gray-300">Save Note</button>
    </div>
</form>
