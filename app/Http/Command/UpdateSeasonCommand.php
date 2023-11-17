<?php

namespace App\Http\Command;


class UpdateSeasonCommand
{
    private int $id;
    private string $season;

    /**
     * @param string $season
     */
    public function __construct(int $id, string $season)
    {
        $this->id = $id;
        $this->season = $season;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getSeason(): string
    {
        return $this->season;
    }
}
