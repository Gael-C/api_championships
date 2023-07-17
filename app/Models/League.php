<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class League extends Model
{
    use HasFactory;

    public function teams()
    {
        return $this->belongsToMany(Team::class);
    }

    public function pictures()
    {
        return $this->hasMany(Pictures::class);
    }

    public function mostSuccesfull() 
    {
        return $this->belongsTo(Team::class, 'most_successfull', 'id');
    }

    public function lastChampion() 
    {
        return $this->belongsTo(Team::class, 'last_champion', 'id');
    }
}
