<!-- /*
    $_GET , $_POST=are special variables used to collect data from an html form ,data is sent to the php file in the action attribute of <form>
    example:<form action="some_file.php" method="get">

    $_GET=data is appended to the url 
    not secure
    char limit
    GET requests can be cahed
    Better for search page

    $_POST = Data is packed inside the body of the HTTP request 
    More Secure 
    No data limit 
    cannot bookmark
    Post request are not cached
    Better for submiting credentials
*/ -->

<!-- HTML code -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>HTML User Form</h1>
    <form action="4-getAndPost.php" method="get">
        <label>Username:</label><br>
        <input type="text" name="username"><br>
        <label>Password</label><br>
        <input type="password" name="password"><br>
        <button type="submit">Log In</button>
    </form>

</body>
</html>

<!-- php program -->
<?php 
    echo $_GET["username"];
    echo $_POST["password"];
?>