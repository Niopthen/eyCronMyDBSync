<?php

###################################################################
# DB Sync Script Configuration Template
###################################################################

/* GLOBAL Configuration Data for the Sync Process */
$DBSyncConf['GLOBAL']['SYNC_ALL'] = 0;
$DBSyncConf['GLOBAL']['SYNC_DIRECTION'] = 1; # 1 => ONE2TWO | 2 TWO2ONE
$DBSyncConf['GLOBAL']['MAX_NUMROWS'] = 20;
$DBSyncConf['GLOBAL']['SYNC_ID'] = 'row_id';
$DBSyncConf['GLOBAL']['LOG']['FILE'] = '/var/logs/DBSyncLog.log';
$DBSyncConf['GLOBAL']['AVAIL_SYNC_TYP'] = array(0, 1, 2);
$DBSyncConf['GLOBAL']['WRITE_LOG'] = array(0, 1);

$DBSyncConf['DEFAULT']['WRITE_LOG'] = 0;
$DBSyncConf['DEFAULT']['SYNC_TYP'] = 1;

/*
 * Database Information 
 */


/* Server ONE */
$DBSyncConf['ONE']['SERVER'] = '';
$DBSyncConf['ONE']['USER'] = '';
$DBSyncConf['ONE']['PASSWORD'] = '';
$DBSyncConf['ONE']['DATABASE'] = '';
$DBSyncConf['ONE']['TABLE'] = '';
$DBSyncConf['ONE']['PORT'] = '';
$DBSyncConf['ONE']['CHARSET'] = '';


/* Server TWO */
$DBSyncConf['TWO']['SERVER'] = '';
$DBSyncConf['TWO']['USER'] = '';
$DBSyncConf['TWO']['PASSWORD'] = '';
$DBSyncConf['TWO']['DATABASE'] = '';
$DBSyncConf['TWO']['TABLE'] = '';
$DBSyncConf['TWO']['PORT'] = '';
$DBSyncConf['TWO']['CHARSET'] = '';
