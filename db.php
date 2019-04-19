<?php

	 $DB_host = "localhost";
	 $DB_suggest = "root";
	 $DB_pass = "";
	 $DB_name = "sowing";
	 
	 $MySQLi_CON = new MySQLi($DB_host,$DB_suggest,$DB_pass,$DB_name);
    
     if($MySQLi_CON->connect_errno)
     {
         die("ERROR : -> ".$MySQLi_CON->connect_error);
     }

?>