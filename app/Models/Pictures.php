<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pictures extends Model
{
    use HasFactory;

    public function teams () 
    {
        return $this->belongsTo(Team::class);
    }

    public function leagues()
    {
        return $this->belongsTo(League::class);
    }
}
