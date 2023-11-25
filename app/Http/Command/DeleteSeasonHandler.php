<?php

namespace App\Http\Command;


use App\Models\Seasons;

class DeleteSeasonHandler
{
    public function __invoke(DeleteSeasonCommand $commmand)
    {
        Seasons::destroy($commmand->getId());
    }
}
