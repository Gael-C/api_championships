<?php

namespace App\Http\Command;

use App\Models\Matches;

class DeleteMatcheshandler
{
    public function __invoke(DeleteMatchesCommand $command)
    {
        Matches::destroy($command->getId());
    }
}
