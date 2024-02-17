<?php

namespace MarJose123\FilamentMessenger\Models;

use Chatify\Traits\UUID;
use Illuminate\Database\Eloquent\Model;

class MessengerFavorites extends Model
{
    use UUID;

    protected $table = 'ch_favorites';
}
