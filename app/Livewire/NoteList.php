<?php

namespace App\Livewire;

use App\Models\Note;
use Illuminate\View\View;
use Livewire\Component;

class NoteList extends Component
{
    public $searchQuery = '';

    public function render(): View
    {
        $notes = collect();
        try {
            $notes = Note::query()
                ->whereNotNull('body')
                ->where('body', '!=', '')
                ->when($this->searchQuery, fn ($query) => $query->whereRaw('body MATCH ?', [$this->searchQuery]))
                ->get();
        } catch (\Throwable $th) {
            // no-op, malformed FULLTEXT query
            ray($th);
        }

        return view('livewire.note-list', [
            'notes' => $notes
        ]);
    }
}
