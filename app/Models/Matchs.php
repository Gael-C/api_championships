<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matchs extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function homeTeam() {
        return $this->belongsTo(Team::class);
    }

    public function awayTeam() {
        return $this->belongsTo(Team::class);
    }

    public function matchWeek() {
        return $this->hasMany(MatchWeek::class);
    }
}
