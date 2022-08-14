<?php
    $host = 'localhost';
    $user ='root';
    $password ='';
    $db ='web_db';
    $link = mysqli_connect( $host,$user,$password, $db);
    if ($link)
    {
        echo 'Connected Successfuly';
    }
    else
    {
        die('Connection Problem');
    }
?>





    
