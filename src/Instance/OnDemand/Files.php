<?php

namespace Sugarcrm\Support\Helpers\Packager\Instance\OnDemand;

class Files extends \Sugarcrm\Support\Helpers\Packager\Instance\MySQL\Files
{
    public function __construct($sourceFolder, $destinationFolder, $archiveName)
    {
        return parent::__construct($sourceFolder, $destinationFolder, $archiveName);
    }
}