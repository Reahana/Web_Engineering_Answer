<!-- Write PHP code to store data in student table and retrieve data from student table – using PHP Form. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
  <form action="insert.php" method="POST">
    <label for="">Roll: </label>
    <input type="number" name="roll">
    <br><br>
    <label for="">First Name</label>
    <input type="text" name="first_name">
    <br><br>
    <label for="">Last Name</label>
    <input type="text" name="last_name">
    <br><br>
    <label for="">Email</label>
    <input type="email" name="email">
    <br><br>
    <input type="submit" value="Submit" name="submit">
  </form>
</body>
</html>

