<?php

namespace Katas\CD\CompactDiscFormats;

use Katas\CD\CompactDiscAbstract;

class CompactDiscToJson implements CompactDiscToFormatInterface
{

    public function format(CompactDiscAbstract $compactDisc)
    {
        return json_encode(
            array(
                'title' => $compactDisc->getTitle(),
                'band' => $compactDisc->getBand(),
                'trackList' => $compactDisc->getTrackList(),
            )
        );
    }
}

