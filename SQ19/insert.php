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
//insert data
     if(isset($_POST['submit']))
     {
         $roll =$_POST['roll'];
         $first_name =$_POST['first_name'];
         $last_name=$_POST['last_name'];
         $email=$_POST['email'];

         $sql = "INSERT INTO students ( roll ,first_name , last_name ,email ) 
                    VALUES ('$roll','$first_name','$last_name','$email')";

            if(mysqli_query($link,  $sql ) ) 
            {  
            echo " Data stored  successfully <br>";
            }
         else{
            echo "Error inserting data: <br>" . mysqli_error($link);
            }
      }
   //retrive data
      $newsql = 'SELECT * FROM students';
      echo " <br> <h1>Retrieved Data</h1> ";
      if(mysqli_query($link,  $newsql ) ) {
          $result= mysqli_query($link ,$newsql);
   
          while ($row=mysqli_fetch_assoc($result ))
                  {
                      echo  
                      "<b> roll: </b> ". $row["roll"] .  " &nbsp;&nbsp;&nbsp;".
                      "<b> Name:  </b>  ". $row["first_name"]." &nbsp;". $row["last_name"]." &nbsp;&nbsp;&nbsp;". 
                      "<b> Email:  </b>  ". $row["email"] .
                      "<br>";
                     
                  }     
      }
      else{
          echo "Error retrieving data: " . mysqli_error($link);
      }
     mysqli_close($link);
  ?>