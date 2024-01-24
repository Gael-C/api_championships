<?php

namespace App\Http\Query;

use App\Models\Classment;
use Illuminate\Database\Eloquent\Collection;

class GetAllClassment
{
    public  function get():Collection
    {
        $classment = new Classment();
        $classment->setConnection('DB_RD');
        return $classment::with('team','league')->get()->orderBy('classement');
    }
}
