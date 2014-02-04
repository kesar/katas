<?php

namespace Katas\CD\CompactDiscFormats;

use Katas\CD\CompactDisc;

class CompactDiscToJson implements CompactDiscToFormatInterface
{

    public function format(CompactDisc $compactDisc)
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

