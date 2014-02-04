<?php

namespace Katas\CD;

class CompactDiscFactory
{

    public function build($type = 'CD')
    {
        if ($type === 'CD') {
            $cd = new CompactDisc();
        } elseif ($type === 'EnhancedCD') {
            $cd = new EnhancedCompactDisc();
        }
        return $cd;
    }
}