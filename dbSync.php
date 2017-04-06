<?php

###################################################################
# DB Sync Script
###################################################################

if (!file_exists('dbSync.conf.php'))
{
    echo 'the Sync file is missing /n';
}
else
{
    require_once './dbSync.conf.php';
}

$myDBSync = new myDBSync($mySQL);
$myDBSync->mySQLSync($mySQL['GLOBAL']['SYNC_DIRECTION']);

class myDBSync
{

    private $mySQLConOne;
    private $mySQLConTwo;
    private $mySQLArray;

    function __construct($mySQL)
    {
        $this->mySQLArray = $mySQL;
        /* make the connection to DB One and DB Two */
        $this->mySQLConOne = $this->mysqliConnect($this->mySQLArray['ONE']);
        $this->mySQLConTwo = $this->mysqliConnect($this->mySQLArray['TWO']);
        
        // make sync
        $this->mySQLSync();
          
    }

    private function mySQLSync()
    {
        // hole mir 
        
    }

/**
 * Connection to the databases from the config file
 * @param array $mySQLCon
 * @return string
 */
    private function mysqliConnect($mySQLCon)
    {
        $dbh = mysqli_init();
        if (!$dbh)
        {
            die('Connection for ' . $mySQLCon['SERVER'] . ' is not possible');
        }

        mysqli_connect($mySQLCon['SERVER'], $mySQLCon['USER'], $mySQLCon['PASSWORD'], $mySQLCon['DATABASE'], $mySQLCon['PORT'], NULL, MYSQLI_CLIENT_COMPRESS);
        mysqli_set_charset($dbh, $mySQLCon['CHARSET']);
        return $dbh;
    }

    private function mySQL_Select()
    {
        
    }

    private function mySQL_Insert()
    {
        
    }

    function __destruct()
    {
        
    }

}