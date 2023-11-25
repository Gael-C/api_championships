<?php

namespace App\Http\Query;

use App\Models\Matches;

class GetOneMatch
{
    public function __construct(private int $id)
    {}

    public function get(): array
    {
        $match = Matches::query()->select('*')->findOrFail($this->id)->load('matchWeeks', 'homeTeam', 'awayTeam');
        return $match->toArray();
    }
}
