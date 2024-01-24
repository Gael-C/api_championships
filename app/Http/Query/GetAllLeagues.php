<?php

namespace App\Http\Query;

use App\Models\League;
use Illuminate\Database\Eloquent\Collection;

class GetAllLeagues
{
    public function get():Collection
    {
        $leagues = new League();
        $leagues->setConnection('DB_RD');
        return $leagues::query()->get()->load('teams', 'classment');
    }
}
