<!-- 20. Write down simple PHP and NySQL code for adding  and retrieving data in the following  table – -->

<!-- retrieving data -->

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