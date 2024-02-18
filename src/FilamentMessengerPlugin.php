<?php

namespace MarJose123\FilamentMessenger;

use Filament\Contracts\Plugin;
use Filament\Navigation\MenuItem;
use Filament\Panel;
use Illuminate\Support\Facades\Blade;
use Livewire\Livewire;
use MarJose123\FilamentMessenger\Livewire\MessengerMenu;

class FilamentMessengerPlugin implements Plugin
{
    public function getId(): string
    {
        return 'filament-messenger';
    }

    public function register(Panel $panel): void
    {
        $panel
            ->renderHook(
                name: 'panels::user-menu.before',
                hook: fn (): string => Blade::render('@livewire(\'messenger-menu\')')
            );
    }

    public function boot(Panel $panel): void
    {
        Livewire::component('messenger-menu', MessengerMenu::class);

    }

    public static function make(): static
    {
        return app(static::class);
    }

    public static function get(): static
    {
        /** @var static $plugin */
        $plugin = filament(app(static::class)->getId());

        return $plugin;
    }
}
