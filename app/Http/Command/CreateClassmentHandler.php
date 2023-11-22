<?php

namespace App\Http\Command;


use App\Models\Classment;

class CreateClassmentHandler
{
    public function __invoke(CreateClassmentCommand $command)
    {
        $classment = new Classment();
        $classment->victoires = $command->getVictoires();
        $classment->défaites = $command->getDefaites();
        $classment->nuls = $command->getNuls();
        $classment->pour = $command->getPour();
        $classment->contre = $command->getContre();
        $classment->goal_average = $command->getGoalAverage();
        $classment->bonus = $command->getBonus();
        $classment->points = $command->getPoints();
        $classment->classement = $command->getClassement();
        $classment->team_id = $command->getTeamId();
        $classment->league_id = $command->getLeagueId();

        $classment->save();
    }
}
