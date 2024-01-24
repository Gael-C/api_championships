<?php

namespace App\Http\Query;


use App\Models\Seasons;
use Illuminate\Database\Eloquent\Collection;

class GetAllSeasons
{
    public function get():Collection
    {
        $seasons = new Seasons();
        $seasons->setConnection('DB_RD');
        return $seasons::query()->get()->load('matchWeeks');
    }
}
