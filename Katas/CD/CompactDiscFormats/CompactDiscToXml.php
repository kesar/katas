<?php

namespace Katas\CD\CompactDiscFormats;

use Katas\CD\CompactDiscAbstract;

class CompactDiscToXml implements CompactDiscToFormatInterface
{

    public function format(CompactDiscAbstract $compactDisc)
    {
        $compactDiscArray = array(
            'title' => $compactDisc->getTitle(),
            'band' => $compactDisc->getBand(),
            'trackList' => $compactDisc->getTrackList(),
        );

        $xml = new \SimpleXMLElement('<root/>');
        array_walk_recursive($compactDiscArray, array($xml, 'addChild'));
        return $xml->asXML();
    }
}