<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\Pivot;

class Team_League extends Pivot
{
    public function league(): BelongsTo
    {
        return $this->belongsTo(Team::class, 'id');
    }
}