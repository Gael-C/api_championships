<?php

namespace App\Http\Query;

use App\Models\Team;
use Illuminate\Database\Eloquent\Collection;

class GetAllTeams
{
    public function get():Collection
    {
        $teams = new Team();
        $teams->setConnection('DB_RD');
        return $teams::query()->get()->load('leagues','classment');
    }
}
