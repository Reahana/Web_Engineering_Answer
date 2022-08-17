<?php
    $host = 'localhost';
    $user ='root';
    $password ='';
    $db ='web_db';
    $link = mysqli_connect( $host,$user,$password, $db);
    if(! $link ) {
        die('Could not connect: ');
     }
     echo "Connected successfully \n";
     $sql = 'CREATE Table students(
         roll INT(10)   PRIMARY KEY,
        first_name VARCHAR(20) NOT NULL,
        email VARCHAR(50))';
     if(mysqli_query($link,  $sql ) ) 
     {
        echo "\n Table students created
         successfully \n";
     }
     else{
     
        echo "Error creating table: " 
        . mysqli_error($link);
    }
    mysqli_close($link);
  ?> 