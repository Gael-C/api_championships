<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Team extends Model
{
    use HasFactory;

    public function leagues()
    {
        return $this->belongsToMany(League::class, 'teams_leagues')
                    ->using(Team_League::class)
                    ->withPivot('id', 'league_id');
    }

    public function pictures()
    {
        return $this->hasMany('pictures');
    }

    public function league(): BelongsTo
    {
        return $this->belongsTo(League::class, 'last_champion', 'leagues');
    }
}
