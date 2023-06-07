<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class League extends Model
{
    use HasFactory;

    public function teams()
    {
        return $this->belongsToMany(League::class);
    }

    public function pictures()
    {
        return $this->hasMany('pictures');
    }

}
