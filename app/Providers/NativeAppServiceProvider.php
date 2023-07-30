<?php

namespace App\Providers;

use App\Events\ShortcutPressed;
use App\Events\WindowFocusShortcutPressed;
use Native\Laravel\Facades\ContextMenu;
use Native\Laravel\Facades\Dock;
use Native\Laravel\Facades\MenuBar;
use Native\Laravel\Facades\Window;
use Native\Laravel\Facades\GlobalShortcut;
use Native\Laravel\Menu\Menu;

class NativeAppServiceProvider
{
    /**
     * Executed once the native application has been booted.
     * Use this method to open windows, register global shortcuts, etc.
     */
    public function boot(): void
    {
        Menu::new()
            ->appMenu()
            ->register();

        event(new WindowFocusShortcutPressed());

        MenuBar::create()
            ->route('notes.index')
            ->showDockIcon()
            ->backgroundColor('#00000010') // Semi-transparent black
            ->width(600)
            ->height(800);

        /**
            Dock::menu(
                Menu::new()
                    ->event(DockItemClicked::class, 'Settings')
                    ->submenu('Help',
                        Menu::new()
                            ->event(DockItemClicked::class, 'About')
                            ->event(DockItemClicked::class, 'Learn More…')
                    )
            );

            ContextMenu::register(
                Menu::new()
                    ->event(ContextMenuClicked::class, 'Do something')
            );

        */
        GlobalShortcut::key('CmdOrCtrl+Shift+I')
            ->event(WindowFocusShortcutPressed::class)
            ->register();
    }
}
