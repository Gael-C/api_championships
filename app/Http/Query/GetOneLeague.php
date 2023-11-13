<?php

namespace App\Http\Query;

use App\Models\League;

class GetOneLeague
{
    public function __construct(private int $league)
    {}

    public function get():array
    {
        $league = League::query()->select('*')->findOrFail($this->league)->load(['teams']);
        return $league->toArray();
    }
}
