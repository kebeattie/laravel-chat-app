<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Messages extends Model
{

    protected $fillable = [
        'message',
        'conversations_id',
        'sender_id',
        'receiver_id',
    ];
    public function conversation(): BelongsTo
    {
        return $this->belongsTo(Conversations::class);
    }

    public function receiver(): BelongsTo
    {
        return $this->belongsTo(User::class, 'receiver_id');
    }

    public function sender(): BelongsTo
    {
        return $this->belongsTo(User::class, 'sender_id');
    }

}
