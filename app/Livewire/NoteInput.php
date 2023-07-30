<?php

namespace App\Livewire;

use App\Livewire\Forms\StoreNote;
use App\Models\Note;
use Livewire\Component;
use Native\Laravel\Facades\MenuBar;
use Native\Laravel\Facades\Window;

class NoteInput extends Component
{
    public StoreNote $form;

    public function submit(): void
    {
        $this->form->store();

        MenuBar::hide();
        Window::close();
    }

    public function render()
    {
        return view('livewire.note-input');
    }
}
