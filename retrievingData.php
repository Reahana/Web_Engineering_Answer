<?php
    $host = 'localhost';
    $user ='root';
    $password ='';
    $db ='web_db';
    $link = mysqli_connect( $host,$user,$password, 
    $db);
    if(! $link ) {
        die('Could not connect: ');
     }
        $sql = 'SELECT * FROM students';
        if(mysqli_query($link,  $sql ) ) {
            $result= mysqli_query($link ,$sql);
            $i =0;
            while ($row=mysqli_fetch_assoc($result ))
                    {
                        echo  
                        "<b> roll: </b> ". $row["roll"] .  " &nbsp;&nbsp;&nbsp;".
                        "<b> Name:  </b>  ". $row["first_name"]." &nbsp;". $row["last_name"]. 
                        "<br>";
                    }     
        }
        else{
            echo "Error retrieving data: " 
            . mysqli_error($link);
        }
  ?>