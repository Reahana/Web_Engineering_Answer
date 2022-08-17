<!-- 20. Write down simple PHP and NySQL code for adding  and retrieving data in the following  table – -->

<!-- adding data -->
<?php
    $host = 'localhost';
    $user ='root';
    $password ='';
    $db ='testDB';
    $link = mysqli_connect( $host,$user,$password, $db);
    if(! $link ) {
        die('Could not connect: ');
     }
     echo "Connected successfully <br>";
     $sql = 'INSERT INTO students ( id , department ) VALUES (8171006, "cse")';
     if(mysqli_query($link,  $sql ) ) {
        echo "\n Data stored  successfully \n";
     }
     else{
     
        echo "Error inserting data: " . mysqli_error($link);
    }
  ?>