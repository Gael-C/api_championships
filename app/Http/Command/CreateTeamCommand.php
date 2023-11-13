<?php

namespace App\Http\Command;


readonly class CreateTeamCommand
{
    private string $name;
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
    private string $stade_pic;
    private int $league;

    public function __construct(
        $name,
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
        $stade_pic,
        $league
    )
    {
        $this->name = $name;
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
        $this->stade_pic = $stade_pic;
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

    public function getStadePic():string
    {
        return $this->stade_pic;
    }

    public function getLeague(): int
    {
        return $this->league;
    }
}