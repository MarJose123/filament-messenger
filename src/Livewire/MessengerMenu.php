<?php

namespace MarJose123\FilamentMessenger\Livewire;

use Filament\Facades\Filament;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use MarJose123\FilamentMessenger\Livewire\DatabaseMessagesListView as BaseComponents;

class MessengerMenu extends BaseComponents
{
    public function getUser(): Authenticatable
    {
        return Filament::auth()->user();
    }

    public function render(): Factory | Application | View | \Illuminate\View\View | \Illuminate\Contracts\Foundation\Application
    {
        return view('filament-messenger::livewire.messenger-menu');
    }
}
