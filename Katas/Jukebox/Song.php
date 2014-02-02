<?php

namespace Katas\Jukebox;

class Song
{
    private $played = false;

    public function play()
    {
        $this->played = true;
    }

    public function isPlayed()
    {
        return $this->played;
    }

}
