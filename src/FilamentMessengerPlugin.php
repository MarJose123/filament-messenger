<?php

namespace MarJose123\FilamentMessenger;

use Filament\Contracts\Plugin;
use Filament\Navigation\MenuItem;
use Filament\Panel;

class FilamentMessengerPlugin implements Plugin
{
    public function getId(): string
    {
        return 'filament-messenger';
    }

    public function register(Panel $panel): void
    {
        //
    }

    public function boot(Panel $panel): void
    {
        $panel->userMenuItems([
            'messenger' => MenuItem::make()
                ->label(__('filament-messenger::messenger.navigation.label'))
                ->icon(__('filament-messenger::messenger.navigation.icon')),
        ]);
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
