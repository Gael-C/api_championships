<?php


namespace App\Http\Query;


use App\Models\Seasons;

class GetOneSeason
{
    public function __construct(private int $id)
    {}

    public function get(): array
    {
        $season = Seasons::query()->select('*')->findOrFail($this->id)->load('matchWeeks');
        return $season->toArray();
    }
}
