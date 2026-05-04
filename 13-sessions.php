<?php
    //session=session is a super global variable to store information on a user to be used across multiple pages.A user is assigned a session-id ex.login credentials

    session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    This is the login page <br>
    <a href="14-home.php">This goes to home page</a><br>
</body>
</html>

<?php
    $_SESSION["username"]="BroCode";
    $_SESSION["password"]="Broo";

    echo $_SESSION["username"]."<br>";
    echo $_SESSION["password"]."<br>";
?>