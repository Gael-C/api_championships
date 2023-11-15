<?php

namespace App\Http\Query;

use App\Models\Matches;
use Illuminate\Database\Eloquent\Collection;

class GetAllMatches
{
    public function get():Collection
    {
        return Matches::query()->get();
    }
}
