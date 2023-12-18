<?php

namespace App\Http\Command;


use App\Models\League;

class CreateLeagueHandler
{
    public function __invoke(CreateLeagueCommand $command): void
    {
        $league = new League();
        $league->name = $command->getName();
        $league->slug = $command->getSlug();
        $league->creation = $command->getCreation();
        $league->last_champion = $command->getLastChampion();
        $league->most_successfull = $command->getMostSuccessfull();
        $league->logo = $command->getLogo();

        $league->save();
    }
}
