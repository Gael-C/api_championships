<?php

namespace App\Http\Command;

use App\Models\Classment;

class UpdateCLassmentHandler
{
    public function __invoke(UpdateClassmentCommand $command)
    {
        $classment = Classment::query()->findOrFail($command->getId());
        $classment->victoires += $command->getVictoires();
        $classment->défaites += $command->getDefaites();
        $classment->nuls += $command->getNuls();
        $classment->pour += $command->getPour();
        $classment->contre += $command->getContre();
        $classment->goal_average += $command->getGoalAverage();
        $classment->bonus += $command->getBonus();
        $classment->points += $command->getPoints();
        $classment->classement = $command->getClassement();
        $classment->team_id = $command->getTeamId();
        $classment->league_id = $command->getLeagueId();

        $classment->update();
    }
}
