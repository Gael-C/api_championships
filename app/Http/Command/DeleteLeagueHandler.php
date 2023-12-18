<?php

namespace App\Http\Command;

use App\Models\League;

class DeleteLeagueHandler
{
    public function __invoke(DeleteLeagueCommand $command): void
    {
        League::where('slug', $command->getSlug())->delete();
    }
}
