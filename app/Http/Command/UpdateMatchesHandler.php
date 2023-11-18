<?php

namespace App\Http\Command;

use App\Models\Matches;

class UpdateMatchesHandler
{
    public function __invoke(UpdateMatchesCommand $command)
    {
        $updatedMatches = Matches::query()->select('*')->findOrFail($command->getId());

        $updatedMatches->home_team_id = $command->getHomeTeam();
        $updatedMatches->home_team_result = $command->getHomeResult();
        $updatedMatches->home_team_tries = $command->getHomeTries();
        $updatedMatches->away_team_id = $command->getAwayTeam();
        $updatedMatches->away_team_result = $command->getAwayResult();
        $updatedMatches->away_team_tries = $command->getAwayTries();

        $updatedMatches->update();

        $updatedMatches->matchWeeks()->attach($command->getMatchWeek());
    }
}
