<?php

namespace App\Http\Command;


class  CreateClassmentCommand
{
    private int $victoires;
    private int $defaites;
    private int $nuls;
    private int $pour;
    private int $contre;
    private int $goal_average;
    private int $bonus;
    private int $points;
    private int $classement;
    private int $team_id;
    private int $league_id;

    /**
     * @param int $victoires
     * @param int $defaites
     * @param int $nuls
     * @param int $pour
     * @param int $contre
     * @param int $goal_average
     * @param int $bonus
     * @param int $points,
     * @param int $classement
     * @param int $team_id
     * @param int $league_id
     */
    public function __construct(
        int $victoires,
        int $defaites,
        int $nuls,
        int $pour,
        int $contre,
        int $goal_average,
        int $bonus,
        int $points,
        int $classement,
        int $team_id,
        int $league_id)
    {
        $this->victoires = $victoires;
        $this->defaites = $defaites;
        $this->nuls = $nuls;
        $this->pour = $pour;
        $this->contre = $contre;
        $this->goal_average = $goal_average;
        $this->bonus = $bonus;
        $this->points = $points;
        $this->classement = $classement;
        $this->team_id = $team_id;
        $this->league_id = $league_id;
    }

    public function getVictoires(): int
    {
        return $this->victoires;
    }

    public function getDefaites(): int
    {
        return $this->defaites;
    }

    public function getNuls(): int
    {
        return $this->nuls;
    }

    public function getPour(): int
    {
        return $this->pour;
    }

    public function getContre(): int
    {
        return $this->contre;
    }

    public function getGoalAverage(): int
    {
        return $this->goal_average;
    }

    public function getBonus(): int
    {
        return $this->bonus;
    }

    public function getClassement(): int
    {
        return $this->classement;
    }

    public function getTeamId(): int
    {
        return $this->team_id;
    }

    public function getPoints(): int
    {
        return $this->points;
    }

    public function getLeagueId(): int
    {
        return $this->league_id;
    }

}
