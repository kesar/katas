<?php

namespace Katas\Jukebox\PlaylistSort;

class PlaylistSortByRandomTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var PlaylistSortByRandom
     */
    public $playlistSortByRandom;

    public function setUp()
    {
        $this->playlistSortByRandom = new PlaylistSortByRandom();
    }

    public function testConstruct()
    {
        $playlist = new PlaylistSortByRandom();
    }
}
