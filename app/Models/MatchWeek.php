<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MatchWeek extends Model
{
    use HasFactory;

    protected $guarded = ['id'];


    public function seasons()
    {
        return $this->belongsTo(Seasons::class);    
    }

    public function match()
    {
        return $this->hasMany(Matchs::class);
    }
}
