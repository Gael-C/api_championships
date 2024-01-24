<?php

namespace App\Http\Query;

use App\Models\MatchWeek;
use Illuminate\Database\Eloquent\Collection;

class GetAllMatchWeeks
{
    public function get():Collection
    {
        $matchWeeks = new MatchWeek();
        $matchWeeks->setConnection('DB_RD');
        return $matchWeeks::query()->get()->load('matches');
    }
}
