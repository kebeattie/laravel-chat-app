<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Conversations extends Model
{
    public function messages(): HasMany
    {
        return $this->hasMany(Messages::class);
    }

    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }
}
