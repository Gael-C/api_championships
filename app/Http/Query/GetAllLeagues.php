<?php

namespace App\Http\Query;

use App\Models\League;
use Illuminate\Database\Eloquent\Collection;

class GetAllLeagues
{
    public function get():Collection
    {
        return League::query()->get()->load('teams', 'classment');
    }
}
