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
     if(isset($_POST['submit'])){
      $roll =$_POST['roll'];
      $first_name =$_POST['first_name'];
      $last_name=$_POST['last_name'];
      $email=$_POST['email'];
      $sql = "INSERT INTO students ( roll ,first_name , last_name ,email ) 
     
       VALUES ('$roll','$first_name','$last_name','$email')";
      if(mysqli_query($link,  $sql ) ) {
         
        echo "\n Data stored  successfully \n";
      }
      else{
      
         echo "Error inserting data: " . mysqli_error($link);
      }
     }
     
  ?>