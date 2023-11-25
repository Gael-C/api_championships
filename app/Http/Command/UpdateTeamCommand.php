<?php

namespace App\Http\Command;


class UpdateTeamCommand
{
    private $id;
    private $name;
    private $nickname;
    private $foundation;
    private $stade;
    private $capacity;
    private $website;
    private $facebook;
    private $twitter;
    private $instagram;
    private $youtube;
    private $logo;
    private $stade_pic;
    private $league;

    public function __construct(
        $id,
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
        $this->id = $id;
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

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getNickname()
    {
        return $this->nickname;
    }
    
    public function getFoundation()
    {
        return $this->foundation;
    }

    public function getStade()
    {
        return $this->stade;
    }

    public function getCapacity()
    {
        return $this->capacity;
    }

    public function getWebsite()
    {
        return $this->website;
    }
    
    public function getFacebook()
    {
        return $this->facebook;
    }

    public function getTwitter()
    {
        return $this->twitter;
    }

    public function getInstagram()
    {
        return $this->instagram;
    }

    public function getYoutube()
    {
        return $this->youtube;
    }
    
    public function getLogo()
    {
        return $this->logo;
    }

    public function getStadePic()
    {
        return $this->stade_pic;
    }

    public function getLeague()
    {
        return $this->league ;
    }
}