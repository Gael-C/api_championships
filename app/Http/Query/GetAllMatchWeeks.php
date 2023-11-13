<?php

namespace App\Http\Query;

use App\Models\MatchWeek;
use Illuminate\Database\Eloquent\Collection;

class GetAllMatchWeeks
{
    public function get():Collection
    {
        return MatchWeek::with('matches')->get();
    }
}
