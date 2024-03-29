<?php

namespace App\Http\Command;


use App\Models\Team;

class DeleteTeamHandler
{
    public function __invoke(DeleteTeamCommand $command): void
    {
        Team::where('slug',$command->getSlug())->delete();
    }
}
