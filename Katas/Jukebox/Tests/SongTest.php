<?php

namespace Katas\Jukebox;

class SongTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Song
     */
    public $song;

    public function setUp()
    {
        $this->song = new Song();
    }

    public function testConstruct()
    {
        $song = new Song();
    }
}
