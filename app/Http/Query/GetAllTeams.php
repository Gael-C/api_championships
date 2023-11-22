<?php

namespace App\Http\Query;

use App\Models\Team;
use Illuminate\Database\Eloquent\Collection;

class GetAllTeams
{
    public function get():Collection
    {
        return Team::query()->get()->load('leagues','classment', 'pictures');
    }
}