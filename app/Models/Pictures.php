<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pictures extends Model
{
    use HasFactory;

    public function teams () 
    {
        return $this->belongsToMany(Team::class);
    }

    public function leagues()
    {
        return $this->belongsToMany(League::class);
    }
}
