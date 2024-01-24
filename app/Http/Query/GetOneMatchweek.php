<?php

namespace App\Http\Query;


use App\Models\MatchWeek;

class GetOneMatchweek
{
    public function __construct(private int $id)
    {}

    public  function get():array
    {
        $matchWeek = new MatchWeek();
        $matchWeek->setConnection('DB_RD');
        $matchWeek = $matchWeek::query()->select('*')->findOrFail($this->id)->load('matches');
        return $matchWeek->toArray();
    }
}
