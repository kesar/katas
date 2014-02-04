<?php

namespace Katas\CD\CompactDiscFormats;

use Katas\CD\CompactDiscAbstract;

interface CompactDiscToFormatInterface
{
    public function format(CompactDiscAbstract $compactDisc);
}
