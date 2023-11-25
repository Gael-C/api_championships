<?php

namespace App\Http\Command;


use App\Models\Seasons;

class UpdateSeasonHandler
{

    public function __invoke(UpdateSeasonCommand $command)
    {
        $updatedSeason = Seasons::query()->select('*')->findOrFail($command->getId());
        $updatedSeason->season = $command->getSeason();

        $updatedSeason->update();
    }
}
