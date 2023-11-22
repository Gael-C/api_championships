<?php

namespace App\Http\Command;

class UpdateClassmentCommand
{
    private int $id;
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
     * @param int $id
     * @param int $victoires
     * @param int $defaites
     * @param int $nuls
     * @param int $pour
     * @param int $contre
     * @param int $goal_average
     * @param int $bonus
     * @param int $points
     * @param int $classement
     * @param int $team_id
     * @param int $league_id
     */
    public function __construct(
        int $id,
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
        $this->id = $id;
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

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return int
     */
    public function getVictoires(): int
    {
        return $this->victoires;
    }

    /**
     * @return int
     */
    public function getDefaites(): int
    {
        return $this->defaites;
    }

    /**
     * @return int
     */
    public function getNuls(): int
    {
        return $this->nuls;
    }

    /**
     * @return int
     */
    public function getPour(): int
    {
        return $this->pour;
    }

    /**
     * @return int
     */
    public function getContre(): int
    {
        return $this->contre;
    }

    /**
     * @return int
     */
    public function getGoalAverage(): int
    {
        return $this->goal_average;
    }

    /**
     * @return int
     */
    public function getBonus(): int
    {
        return $this->bonus;
    }

    /**
     * @return int
     */
    public function getPoints(): int
    {
        return $this->points;
    }

    /**
     * @return int
     */
    public function getClassement(): int
    {
        return $this->classement;
    }

    /**
     * @return int
     */
    public function getTeamId(): int
    {
        return $this->team_id;
    }

    /**
     * @return int
     */
    public function getLeagueId(): int
    {
        return $this->league_id;
    }

}
