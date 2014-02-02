<?php

namespace Katas\Jukebox;

class Jukebox
{
    private $songs = array();
    /**
     * @var Playlist
     */
    private $playlist;

    public function __construct(Playlist $playlist)
    {
        $this->playlist = $playlist;
    }

    public function addSong(Song $song)
    {
        $this->songs[] = $song;
        $this->playlist->addSong($song);
    }
}
