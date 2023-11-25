<?php

namespace App\Http\Command;


use App\Models\Classment;

class DeleteClassmentHandler
{
    public function __invoke(DeleteClassmentCommand $command)
    {
        Classment::destroy($command->getId());
    }
}
