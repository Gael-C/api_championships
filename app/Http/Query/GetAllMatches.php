<?php

namespace App\Http\Query;

use App\Models\Matches;
use Illuminate\Database\Eloquent\Collection;

class GetAllMatches
{
    public function get():Collection
    {
        $matches = new Matches();
        $matches->setConnection('DB_RD');
        return $matches::query()->get()->load('matchWeeks', 'awayTeam', 'homeTeam');
    }
}
