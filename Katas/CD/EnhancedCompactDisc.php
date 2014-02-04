<?php

namespace Katas\CD;

class EnhancedCompactDisc extends CompactDiscAbstract
{
    public function __construct($title = '', $band = '')
    {
        $this->setTitle($title);
        $this->setBand($band);
        $this->setTrackList(array('DATA'));
    }
}