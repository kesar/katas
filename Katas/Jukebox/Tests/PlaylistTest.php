<?php

namespace Katas\Jukebox;

class PlaylistTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Playlist
     */
    public $playlist;

    public function setUp()
    {
        $this->playlist = new Playlist();
    }

    public function testConstruct()
    {
        $playlist = new Playlist();
    }
}
