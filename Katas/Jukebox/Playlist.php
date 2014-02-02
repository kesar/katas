<?php

namespace Katas\Jukebox;

use Katas\Jukebox\Exceptions\UnableToFindNextSongException;

class Playlist
{
    private $songs = array();
    private $currentSong = 0;

    public function addSong(Song $song)
    {
        $this->songs[] = $song;
    }

    public function increaseCurrentSongIndex()
    {
        $this->currentSong++;
    }

    /**
     * @throws Exceptions\UnableToFindNextSongException
     * @return Song
     */
    public function getNextSong()
    {
        if ($this->existNextSong() === false) {
            throw new UnableToFindNextSongException();
        }
        return $this->songs[$this->currentSong + 1];
    }

    private function existNextSong()
    {
        return array_key_exists($this->currentSong + 1, $this->songs);
    }

    public function getSongs()
    {
        return $this->songs;
    }

    public function setSongs(array $songs)
    {
        $this->songs = $songs;
    }
}
