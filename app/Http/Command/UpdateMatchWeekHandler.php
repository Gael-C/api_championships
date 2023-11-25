<?php

namespace App\Http\Command;

use App\Models\MatchWeek;

class UpdateMatchWeekHandler
{
    public function __invoke(UpdateMatchWeekCommand $command)
    {
        $updatedMatchWeek = MatchWeek::query()->select('*')->findOrFail($command->getId());
        $updatedMatchWeek->match_week_number = $command->getMatchWeekNumber();
        $updatedMatchWeek->seasons_id = $command->getSeasonId();

        $updatedMatchWeek->update();
    }
}
