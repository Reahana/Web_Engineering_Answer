<!--18. Write down the HTML, PHP  & SQL code to store the following info into a database -->

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login Form</title>
    </head>
    <body>
        <form action="info.php" method="POST" >
            <label>User Name: </label>
            <input type="text" name="uname">
            <br><br>
            <label>Password: </label>
            <input type="password" name="pass">
            <br><br>
            <label>Email: </label>
            <input type="email" name="email">
            <br><br>
            <input type="submit" value="Submit" name="submit">
        </form>
    </body>
</html>