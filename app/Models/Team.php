<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function leagues()
    {
        return $this->belongsToMany(League::class);
    }

    public function pictures()
    {
        return $this->hasMany(Pictures::class);
    }

    public function mostSuccesfull()
    {
        return $this->hasOne(League::class);
    }

    public function lastChampion()
    {
        return $this->hasOne(League::class,);
    }
}
