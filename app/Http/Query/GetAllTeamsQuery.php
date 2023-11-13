<?php

namespace App\Http\Query;

use App\Models\Team;
use Illuminate\Database\Eloquent\Collection;

class GetAllTeamsQuery
{
    public function get():Collection
    {
        $teams = Team::with(['leagues', 'pictures'])->get();
        return $teams;
    }
}