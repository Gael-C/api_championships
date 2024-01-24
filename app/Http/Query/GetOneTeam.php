<?php

namespace App\Http\Query;

use App\Models\Team;

class GetOneTeam
{
    public function __construct(private string $slug)
    {}

    public function get():array
    {
        $team = new Team();
        $team->setConnection('DB_RD');
        $team = $team::where('slug', $this->slug)->firstOrFail()->load('leagues', 'classment');
        return $team->toArray();
    }
}
