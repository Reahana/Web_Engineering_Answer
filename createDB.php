<?php
    $host = 'localhost';
    $user ='root';
    $password ='';
    $link = mysqli_connect( $host,$user,$password);
    if(! $link ) {
        die('Could not connect: ');
     }
     echo "Connected successfully \n";

     $sql = 'CREATE Database web_db';

     if(mysqli_query($link,  $sql ) ) {
        echo "\n Database web_db created successfully <br>";
     }
     else{
     
    echo 'Could not create database: '. mysqli_error($link);
    }
    mysqli_close($link);
  ?>