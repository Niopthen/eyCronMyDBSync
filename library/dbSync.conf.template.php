<?php

###################################################################
# DB Sync Script Configuration Template
###################################################################

/* GLOBAL Configuration Data for the Sync Process */
$mySQL['GLOBAL']['SYNC_ALL'] = 0;
$mySQL['GLOBAL']['SYNC_DIRECTION'] = 1; # 1 => ONE2TWO | 2 TWO2ONE
$mySQL['GLOBAL']['MAX_NUMROWS'] = 20;
$mySQL['GLOBAL']['SYNC_ID'] = 'row_id';
$mySQL['GLOBAL']['LOG']['FILE'] = '';


/* 
 * Database Information 
 */


/* Server ONE */
$mySQL['ONE']['SERVER']     = '';
$mySQL['ONE']['USER']       = '';
$mySQL['ONE']['PASSWORD']   = '';
$mySQL['ONE']['DATABASE']   = '';
$mySQL['ONE']['TABLE']      = '';
$mySQL['ONE']['PORT']       = '';
$mySQL['ONE']['CHARSET']    = '';


/* Server TWO */
$mySQL['TWO']['SERVER']     = '';
$mySQL['TWO']['USER']       = '';
$mySQL['TWO']['PASSWORD']   = '';
$mySQL['TWO']['DATABASE']   = '';
$mySQL['TWO']['TABLE']      = '';
$mySQL['TWO']['PORT']       = '';
$mySQL['TWO']['CHARSET']    = '';