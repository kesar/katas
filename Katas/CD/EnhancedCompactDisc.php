<?php

namespace Katas\CD;

class EnhancedCompactDisc extends CompactDiscAbstract
{
    public function __construct($title = '', $band = '', $trackList = array())
    {
        parent::__construct($title, $band, $trackList);
        $this->setTrackList(array('DATA'));
    }
}
