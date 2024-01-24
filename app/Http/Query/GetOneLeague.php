<?php

namespace App\Http\Query;

use App\Models\League;

class GetOneLeague
{
    public function __construct(private string $slug)
    {}

    public function get():array
    {
        $league = new League();
        $league->setConnection('DB_RD');
        $league = $league::query()->select('id','name', 'slug', 'most_successfull', 'last_champion')
                ->where('slug', $this->slug)->firstOrFail()->load('teams', 'classment');
        return $league->toArray();
    }
}
