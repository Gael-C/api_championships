<?php


namespace App\Http\Query;


use App\Models\Seasons;

class GetOneSeason
{
    public function __construct(private int $id)
    {}

    public function get(): array
    {
        $season = new Seasons();
        $season->setConnection('DB_RD');
        $season = $season::query()->select('*')->findOrFail($this->id)->load('matchWeeks');
        return $season->toArray();
    }
}
