<?php

use App\Livewire\NoteInput;
use App\Livewire\NoteList;
use Illuminate\Support\Facades\Route;

Route::get('/', NoteInput::class)->name('notes.create');
Route::get('/notes', NoteList::class)->name('notes.index');
