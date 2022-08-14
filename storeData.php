<?php
    $host = 'localhost';
    $user ='root';
    $password ='';
    $db ='web_db';
    $link = mysqli_connect( $host,$user,$password, $db);
    if(! $link ) {
        die('Could not connect: ');
     }
     echo "Connected successfully <br>";
     $sql = 'INSERT INTO students ( roll ,first_name , last_name ,email ) VALUES (33, "Moon", "Akter",""
     )';
     if(mysqli_query($link,  $sql ) ) {
        echo "\n Data stored  successfully \n";
     }
     else{
     
        echo "Error inserting data: " . mysqli_error($link);
    }
  ?>