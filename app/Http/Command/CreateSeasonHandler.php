<?php

namespace App\Http\Command;


use App\Models\Seasons;

class CreateSeasonHandler
{
    public function __invoke(CreateSeasonCommand $command)
    {
        $season = new Seasons();
        $season->season = $command->getSeason();

        $season->save();
    }
}
