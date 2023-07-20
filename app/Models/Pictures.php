<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pictures extends Model
{
    protected $guarded = ['id', 'created_at', 'updated_at'];

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
