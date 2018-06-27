<?php 
ini_set('memory_limit', '-1');
require('db.php');

$sql = "CREATE TABLE IF NOT EXISTS `tblsample` (

  `id` int(11) NOT NULL auto_increment,   
  `recid` int(11) NOT NULL default '0',       
  `cvfilename` varchar(250)  NOT NULL default '',     
  `cvpagenumber`  int(11) NULL,     
  `cilineno` int(11)  NULL,    
  `batchname`  varchar(100) NOT NULL default '',
  `type` varchar(20) NOT NULL default '',    
  `data` varchar(100) NOT NULL default '',
   PRIMARY KEY  (`id`)

);";

if(mysql_query($sql)){  
         echo "Table created successfully";  
         } else {  
            echo "Table is not created successfully ";  
         }  
         mysql_close($mysqli); 

