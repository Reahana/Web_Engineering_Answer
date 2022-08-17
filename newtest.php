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



<?php
    $host = 'localhost';
    $user ='root';
    $password ='';
    $db ='testDB';
    $link = mysqli_connect( $host,$user,$password, $db);
    if(! $link ) {
        die('Could not connect: ');
     }
    
     $sql = 'SELECT * FROM students';
     if(mysqli_query($link,  $sql ) ) {
        $result= mysqli_query($link ,$sql);
       
        while ($row=mysqli_fetch_assoc($result ))
                {
                    echo  "Department:". $row["department"]."<br>";
                }
        
     }
     else{
     
        echo "Error retrieving data: " . mysqli_error($link);
    }
  ?>