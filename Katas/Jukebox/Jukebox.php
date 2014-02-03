<?php

namespace Katas\Jukebox;

use Katas\Jukebox\Exceptions\UnableToFindNextSongException;
use Katas\Jukebox\PlaylistSort\PlaylistSortableInterface;
use Katas\Jukebox\PlaylistSort\PlaylistSortByRandom;

class Jukebox
{
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
        $this->playlist->addSong($song);
    }

    public function playNext($firstTime = true)
    {
        try {
            $song = $this->playlist->getNextSong();
        } catch (UnableToFindNextSongException $ex) {
            if ($firstTime === true) {
                $this->sort(new PlaylistSortByRandom());
                $this->playNext(false);
            }
            return false;
        }
        $song->play();
        $this->playlist->increaseCurrentSongIndex();
        return true;
    }

    public function sort(PlaylistSortableInterface $sortBy)
    {
        $songs = $this->playlist->getSongs();
        $songs = $sortBy->sort($songs);
        $this->playlist->setSongs($songs);
        $this->playlist->resetCurrentSongIndex();
    }
}
