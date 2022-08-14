<?php
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn ) {
      die('Could not connect: ');
   }
   
   echo 'Connected successfully';
   
   $sql = 'CREATE Database my_db';
   $retval = mysqli_query($conn,  $sql );
   
   if(! $retval ) {
      die('Could not create database: ');
   }
   
   echo "Database test_db created successfully\n";
   
?>