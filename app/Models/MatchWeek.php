<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MatchWeek extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updated_at'];


    public function seasons()
    {
        return $this->belongsTo(Seasons::class);
    }

    public function matches()
    {
        return $this->belongsToMany(Matches::class)->with('awayTeam', 'homeTeam');
    }
}
