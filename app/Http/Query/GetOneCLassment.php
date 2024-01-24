<?php

namespace App\Http\Query;


use App\Models\Classment;

class GetOneCLassment
{
    public function __construct(private int $id)
    {
    }

    public function get():array
    {
        $classment = new Classment();
        $classment->setConnection('DB_RD');
        $classment = $classment::query()->select('*')->findOrFail($this->id)->load('team', 'league');
        return $classment->toArray();
    }
}
