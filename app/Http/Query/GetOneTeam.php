<?php

namespace App\Http\Query;

use App\Models\Team;

class GetOneTeam
{
    public function __construct(private int $id)
    {}

    public function get():array
    {
        $team = Team::query()->select('*')->findOrFail($this->id)->load('leagues', 'classment');
        return $team->toArray();
    }
}
