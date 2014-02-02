<?php

namespace Katas\Jukebox;

class Playlist
{
    private $songs = array();

    public function addSong(Song $song)
    {
        $this->songs[] = $song;
    }
}
