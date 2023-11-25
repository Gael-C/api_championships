<?php

namespace App\Http\Query;


use App\Models\Seasons;
use Illuminate\Database\Eloquent\Collection;

class GetAllSeasons
{
    public function get():Collection
    {
        return Seasons::query()->get()->load('matchWeeks');
    }
}
