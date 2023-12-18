<?php

namespace App\Http\Command;


class CreateTeamCommand
{
    private string $name;
    private string $slug;
    private string $nickname;
    private string $foundation;
    private string $stade;
    private string $capacity;
    private string $website;
    private ?string $facebook;
    private ?string $twitter;
    private ?string $instagram;
    private ?string $youtube;
    private string $logo;
    private int $league;

    public function __construct(
        $name,
        $slug,
        $nickname,
        $foundation,
        $stade,
        $capacity,
        $website,
        $facebook,
        $twitter,
        $instagram,
        $youtube,
        $logo,
        $league
    )
    {
        $this->name = $name;
        $this->slug = $slug;
        $this->nickname = $nickname;
        $this->foundation = $foundation;
        $this->stade = $stade;
        $this->capacity = $capacity;
        $this->website = $website;
        $this->facebook = $facebook;
        $this->twitter = $twitter;
        $this->instagram = $instagram;
        $this->youtube = $youtube;
        $this->logo = $logo;
        $this->league = $league;
    }

    public function getName():string
    {
        return $this->name;
    }

    public function getNickname():string
    {
        return $this->nickname;
    }

    public function getFoundation():string
    {
        return $this->foundation;
    }

    public function getStade():string
    {
        return $this->stade;
    }

    public function getCapacity():string
    {
        return $this->capacity;
    }

    public function getWebsite():string
    {
        return $this->website;
    }

    public function getFacebook():string
    {
        return $this->facebook ?? '';
    }

    public function getTwitter():string
    {
        return $this->twitter ?? '';
    }

    public function getInstagram():string
    {
        return $this->instagram ?? '';
    }

    public function getYoutube():string
    {
        return $this->youtube ?? '';
    }

    public function getLogo():string
    {
        return $this->logo;
    }

    public function getSlug():string
    {
        return $this->slug;
    }

    public function getLeague(): int
    {
        return $this->league;
    }
}
