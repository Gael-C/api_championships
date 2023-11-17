<?php

namespace App\Http\Command;

use App\Models\MatchWeek;

class DeleteMatchWeekHandler
{
    public function __invoke(DeleteMatchWeekCommand $command)
    {
        MatchWeek::destroy($command->getId());
    }
}
