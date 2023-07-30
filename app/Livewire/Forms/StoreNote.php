<?php

namespace App\Livewire\Forms;

use App\Models\Note;
use Livewire\Attributes\Rule;
use Livewire\Form;

class StoreNote extends Form
{
    #[Rule('required')]
    public $body = '';

    public function store(): Note
    {
        $note = Note::create(
            $this->all()
        );

        $this->body = '';

        return $note;
    }
}
