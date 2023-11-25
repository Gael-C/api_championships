<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classment extends Model
{
    use HasFactory;

    public function team()
    {
        return $this->belongsTo(Team::class)->select('id', 'name');
    }

    public function league()
    {
        return $this->belongsTo(League::class)->select('id', 'name');
    }
}
