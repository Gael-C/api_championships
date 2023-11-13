<?php

namespace App\Http\Command;

use App\Models\Team;
use App\Http\Command\CreateTeamCommand;

class CreateTeamHandler
{
    public function __invoke(CreateTeamCommand $command): void
    {
        $team = new Team();
        $team->name = $command->getName();
        $team->nickname = $command->getNickname();
        $team->foundation = $command->getFoundation();
        $team->stade = $command->getStade();
        $team->capacity = $command->getCapacity();
        $team->website = $command->getWebsite();
        $team->facebook = $command->getFacebook();
        $team->twitter = $command->getTwitter();
        $team->instagram = $command->getInstagram();
        $team->youtube = $command->getYoutube();
        
        $team->logo = $command->getLogo();
        $team->stade_pic = $command->getStadePic();
       
        $team ->save();

        $team->leagues()->attach($command->getLeague());
       
    }
}