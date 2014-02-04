<?php

namespace Katas\CD;

class CompactDisc extends CompactDiscAbstract
{
    public function __construct($title = '', $band = '', $trackList = array())
    {
        $this->setTitle($title);
        $this->setBand($band);
        $this->setTrackList($trackList);
    }
}