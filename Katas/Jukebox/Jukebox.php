<?php

namespace Katas\Jukebox;

use Katas\Jukebox\PlaylistSort\PlaylistSortableInterface;

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

    public function playNext()
    {
        $song = $this->playlist->getNextSong();
        $song->play();
        $this->playlist->increaseCurrentSongIndex();
    }

    public function sort(PlaylistSortableInterface $sortBy)
    {
        $songs = $this->playlist->getSongs();
        $songs = $sortBy->sort($songs);
        $this->playlist->setSongs($songs);
    }
}
