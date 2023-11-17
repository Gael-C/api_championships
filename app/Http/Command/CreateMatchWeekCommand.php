<?php

namespace App\Http\Command;


class CreateMatchWeekCommand
{
    private string $match_week_number;
    private int $season_id;

    /**
     * @param string $match_week_number
     * @param int $season_id
     */
    public function __construct(string $match_week_number, int $season_id)
    {
        $this->match_week_number = $match_week_number;
        $this->season_id = $season_id;
    }

    public function getMatchWeekNumber(): string
    {
        return $this->match_week_number;
    }

    public function getSeasonId(): int
    {
        return $this->season_id;
    }

}
