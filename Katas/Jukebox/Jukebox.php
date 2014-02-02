<?php

namespace Katas\Jukebox;

class Jukebox
{
    private $songs;

    public function addSong(Song $song)
    {
        $this->songs[] = $song;
    }
}
