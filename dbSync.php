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
    protected $mySQLConOne;
    protected $mySQLConTwo;
    
    function __construct() 
    {
    
    }
   
    
    function mySQLSync($SyncType=1)
    {
        
    }
    
    function mysqlConnect()
    {
        
    }
    
    
    
    
    
    
}