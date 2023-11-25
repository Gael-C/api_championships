<?php

namespace App\Http\Command;


class CreateSeasonCommand
{
    private string $season;

    /**
     * @param string $season
     */
    public function __construct(string $season)
    {
        $this->season = $season;
    }

    public function getSeason(): string
    {
        return $this->season;
    }
}
