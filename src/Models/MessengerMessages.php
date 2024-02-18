<?php

namespace MarJose123\FilamentMessenger\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MessengerMessages extends Model
{
    use HasFactory;

    protected $fillable = [
        'from_id',
        'to_id',
        'message',
        'attachment',
        'seen',
    ];

    protected $casts = [
        'id' => 'string',
    ];
}
