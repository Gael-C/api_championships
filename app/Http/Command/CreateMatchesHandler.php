<?php

namespace App\Http\Command;


use App\Models\Matches;

class CreateMatchesHandler
{
    public function __invoke(CreateMatchesCommand $command)
    {
        $newMatches = new Matches();

        $newMatches->home_team_id = $command->getHomeTeam();
        $newMatches->home_team_result = $command->getHomeResult();
        $newMatches->home_team_tries = $command->getHomeTries();
        $newMatches->away_team_id = $command->getAwayTeam();
        $newMatches->away_team_result = $command->getAwayResult();
        $newMatches->away_team_tries = $command->getAwayTries();

        $newMatches->save();

        $newMatches->matchWeeks()->attach($command->getMatchWeek());
    }
}
