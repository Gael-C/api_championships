<?php

namespace App\Http\Command;

use App\Models\Team;
use App\Http\Command\UpdateTeamCommand;

class UpdateTeamHandler
{
    public function __invoke(UpdateTeamCommand $command): void
    {
        $team = Team::query()->select('*')->findOrFail($command->getId());
        
        switch ($command) {
            case !empty('nickname') && 'nickname' !== "":
                $team->nickname = $command->getNickname();
            case !empty('foundation') && 'foundation' !== "":
                $team->foundation = $command->getFoundation();
            case 'stade' !==null:
                $team->stade = $command->getStade();
            case !empty('capacity') && 'capacity' !== "":
                $team->capacity = $command->getCapacity();
            case !empty('website'):
                $team->website = $command->getWebsite();
            case !empty('facebook') && 'facebook' !== "":
                $team->facebook = $command->getFacebook();
            case !empty('twitter') && 'twitter' !== "":
                $team->twitter = $command->getTwitter();
            case !empty('instagram') && 'instagram' !== "":
                $team->instagram = $command->getInstagram();
            case !empty('youtube') && 'youtube' !== "":
                $team->youtube = $command->getYoutube();
            case !empty('logo') && 'logo' !== "":
                $team->logo = $command->getLogo();
            case !empty('stade_pic') && 'stade_pic' !== "":
                $team->stade_pic = $command->getStadePic();
            default:
                # code...
                break;
        }
        
        $team ->update();
        if ($command->getLeague() !== "") {
            $team->leagues()->update([$command->getLeague()]); 
        }
       
    }
}