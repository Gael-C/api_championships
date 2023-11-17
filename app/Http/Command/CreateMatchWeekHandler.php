<?php

namespace App\Http\Command;

use App\Models\MatchWeek;

class CreateMatchWeekHandler
{
    public function __invoke(CreateMatchWeekCommand $command)
    {
        $matchWeek = new MatchWeek();
        $matchWeek->match_week_number = $command->getMatchWeekNumber();
        $matchWeek->seasons_id = $command->getSeasonId();

        $matchWeek->save();
    }
}
