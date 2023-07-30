<?php

namespace App\Listeners;

use Native\Laravel\Facades\Window;

class FocusWindow
{
    /**
     * Handle the event.
     */
    public function handle(object $event): void
    {
        Window::open()
            ->backgroundColor('#00000010') // Semi-transparent black
            ->showDevTools(false)
            ->width(600)
            ->height(300)
            ->resizable(true)
            ->titleBarHidden();
    }
}
