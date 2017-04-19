<?php

###################################################################
# DB Sync Script
###################################################################

/* Load the Config File - if not available Stop the Script */
if (!file_exists('dbSync.conf.php'))
{
    die('the Sync Config File is missing /n');
}
else
{
    require_once './dbSync.conf.php';
}
$WriteLog = $DBSyncConf['DEFAULT']['WRITE_LOG'];
$SynTyp = $DBSyncConf['DEFAULT']['SYNC_TYP'];




/* Check the SyncTyp and assign it
 * 0 - Total Sync from DB One to the DB Two (only possible if DB Two is emty)
 * 1 - Sync DB One to the DB Two and check the primary key if it is already in DB Two take the next entry
 * 2 - Like SyncTyp 1 but if the primary Key is in DB Two then delete this entry and write the entry form DB One
 * 
 * Check if we should write a log
 */

if (is_array($_GET))
{
    if ((key_exists('SyncTyp', $_GET)) && (in_array($_GET['SyncTyp'], $DBSyncConf['GLOBAL']['AvailSyncTyp'])))
    {
        $SyncTyp = $_GET['SyncTyp'];
    }

    if ((key_exists('WriteLog', $_GET)) && (in_array($_GET['WriteLog'], $DBSyncConf['GLOBAL']['WriteLog'])))
    {
        $WriteLog = $_GET['WriteLog'];
    }
}



$DBSync = new DBSync($DBSyncConf, $SyncTyp, $WriteLog);
$DBSync->mySQLSync($DBSyncConf['GLOBAL']['SYNC_DIRECTION']);

class DBSync
{

    private $SQLConOne;
    private $SQLConTwo;
    private $DBSyncConf;
    private $SyncTyp;
    private $WriteLog;
    private $tmp_rows_db_one;
    private $tmp_rows_db_two;

    function __construct($DBSyncConf, $SyncTyp = 1, $WriteLog = 0)
    {
        $this->SyncTyp = $SyncTyp;
        $this->DBSyncConf = $DBSyncConf;
        $this->WriteLog = $WriteLog;

        // connect to DB One and DB Two
        $this->SQLConOne = $this->Connect($this->DBSyncConf['ONE']);
        $this->SQLConTwo = $this->Connect($this->DBSyncConf['TWO']);

        // make sync
        $this->SQLSync();
    }

    private function SQLSync()
    {
        /*
         * Structure what to code 
         * a. count the rows in db one and db two
         * b. 
         * 
         * 
         * e.g. SELECT * FROM tbl LIMIT 5,10 # Retrieve rows 6-15
         * 
         * 
         */
    }

    /**
     * Connection to the databases from the config file
     * @param array $SQLCon
     * @return string
     */
    private function Connect($SQLCon)
    {
        $dbh = mysqli_init();
        if (!$dbh)
        {
            die('Connection for ' . $SQLCon['SERVER'] . ' is not possible');
        }

        mysqli_connect($SQLCon['SERVER'], $SQLCon['USER'], $SQLCon['PASSWORD'], $SQLCon['DATABASE'], $SQLCon['PORT'], NULL, MYSQLI_CLIENT_COMPRESS);
        mysqli_set_charset($dbh, $SQLCon['CHARSET']);
        return $dbh;
    }

    private function Select()
    {
        
    }

    private function Insert()
    {
        
    }

    private function Delete()
    {
        
    }

    private function Write_Log($message)
    {
        
    }

    function __destruct()
    {
        
    }

}
