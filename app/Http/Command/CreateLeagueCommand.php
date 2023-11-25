<?php

namespace App\Http\Command;


class CreateLeagueCommand
{
    private string $name;

    private string $creation;

    private int $last_champion;

    private int $most_successfull;

    private string $logo;

    /**
     * @param string $name
     * @param string $creation
     * @param int $last_champion
     * @param int $most_successfull
     * @param string $logo
     */
    public function __construct(string $name, string $creation, int $last_champion, int $most_successfull, string $logo)
    {
        $this->name = $name;
        $this->creation = $creation;
        $this->last_champion = $last_champion;
        $this->most_successfull = $most_successfull;
        $this->logo = $logo;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getCreation(): string
    {
        return $this->creation;
    }

    /**
     * @return int
     */
    public function getLastChampion(): int
    {
        return $this->last_champion;
    }

    /**
     * @return int
     */
    public function getMostSuccessfull(): int
    {
        return $this->most_successfull;
    }

    /**
     * @return string
     */
    public function getLogo(): string
    {
        return $this->logo;
    }



}
