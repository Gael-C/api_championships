<?php

namespace App\Http\Command;


class DeleteTeamCommand
{
    private string $slug;

    /**
     * @param $slug
     */
    public function __construct($slug)
    {
        $this->slug = $slug;
    }

    /**
     * @return string
     */
    public function getSlug(): string
    {
        return $this->slug;
    }
}
