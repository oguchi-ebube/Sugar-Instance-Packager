<?php

namespace Sugarcrm\Support\Helpers\Packager\Instance\Cloud;

class Packager extends \Sugarcrm\Support\Helpers\Packager\Instance\MySQL\Packager
{
    /**
     * Packager constructor.
     * @param $sugarPath
     * @param $archivePath
     * @param string $archiveName
     */
    public function __construct($sugarPath, $archivePath, $archiveName = '', $verbosity)
    {
        parent::__construct($sugarPath, $archivePath, $archiveName, $verbosity);

    }

    /**
     * Packages the files
     */
    public function packFiles()
    {
        $filePacker = new Files($this->sugarPath, $this->archive, $this->verbosity);
        return $filePacker->pack();
    }

    /**
     * Packages the database
     */
    public function packDatabase()
    {
        $db = new Database($this->archive, $this->config['dbconfig'], $this->config['dbconfigoption'], $this->verbosity);
        return $db->pack();
    }
}
