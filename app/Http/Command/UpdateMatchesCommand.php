<?php

namespace App\Http\Command;

class UpdateMatchesCommand
{
    private int $id;
    private int $home_team;
    private int $home_result;
    private int $home_tries;
    private int $away_team;
    private int $away_result;
    private int $away_tries;

    private int $match_week;

    /**
     * @param int $home_team
     * @param int $home_result
     * @param int $home_tries
     * @param int $away_team
     * @param int $away_result
     * @param int $away_tries
     * @param int $match_week
     */
    public function __construct(
        int $id,
        int $home_team,
        int $home_result,
        int $home_tries,
        int $away_team,
        int $away_result,
        int $away_tries,
        int $match_week)
    {
        $this->id = $id;
        $this->home_team = $home_team;
        $this->home_result = $home_result;
        $this->home_tries = $home_tries;
        $this->away_team = $away_team;
        $this->away_result = $away_result;
        $this->away_tries = $away_tries;
        $this->match_week = $match_week;
    }

    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return int
     */
    public function getHomeTeam(): int
    {
        return $this->home_team;
    }

    /**
     * @return int
     */
    public function getHomeResult(): int
    {
        return $this->home_result;
    }

    /**
     * @return int
     */
    public function getHomeTries(): int
    {
        return $this->home_tries;
    }

    /**
     * @return int
     */
    public function getAwayTeam(): int
    {
        return $this->away_team;
    }

    /**
     * @return int
     */
    public function getAwayResult(): int
    {
        return $this->away_result;
    }

    /**
     * @return int
     */
    public function getAwayTries(): int
    {
        return $this->away_tries;
    }

    public function getMatchWeek(): int
    {
        return $this->match_week;
    }

}
