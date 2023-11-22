<?php

namespace App\Http\Query;

use App\Models\Team;

class GetOneTeam
{
    public function __construct(private int $team)
    {}

    public function get():array
    {
        $team = Team::query()->select('*')->findOrFail($this->team)->load('leagues', 'classment','pictures');
        return $team->toArray();
    }
}
