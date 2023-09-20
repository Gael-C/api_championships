<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seasons extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function matchWeek()
    {
        return $this->hasMany(MatchWeek::class);
    }

}
