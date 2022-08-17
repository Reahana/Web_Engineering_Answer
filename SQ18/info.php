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
     if(isset($_POST['submit']))
     {
         $name =$_POST['name'];
         $password =$_POST['password'];
         $email=$_POST['email'];
         $sql = "INSERT INTO users (name, password,email) 
         VALUES ('$uname','$password,'$email')";
            if(mysqli_query($link, $sql ) ) 
         {
            
         echo "\n Data stored  successfully <br>";
         }
         else{
         
            echo "Error inserting data: <br>" . mysqli_error($link);
         }
      }
   
      
     
  ?>