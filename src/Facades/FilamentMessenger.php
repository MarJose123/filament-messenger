<?php

namespace MarJose123\FilamentMessenger\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \MarJose123\FilamentMessenger\FilamentMessenger
 */
class FilamentMessenger extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \MarJose123\FilamentMessenger\FilamentMessenger::class;
    }
}
