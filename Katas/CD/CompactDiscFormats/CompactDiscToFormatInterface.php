<?php

namespace Katas\CD\CompactDiscFormats;

use Katas\CD\CompactDisc;

interface CompactDiscToFormatInterface
{
    public function format(CompactDisc $compactDisc);
}
