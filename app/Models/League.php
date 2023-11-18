<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class League extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function teams()
    {
        return $this->belongsToMany(Team::class)->select('team_id', 'name');
    }

    public function pictures()
    {
        return $this->hasMany(Pictures::class);
    }

    public function mostSuccesfull()
    {
        return $this->belongsTo(Team::class, 'most_successfull', 'id')->select('id', 'name');
    }

    public function lastChampion()
    {
        return $this->belongsTo(Team::class, 'last_champion', 'id')->select('id', 'name');
    }
}
