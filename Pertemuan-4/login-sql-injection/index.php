<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "test_yeremia";
$conn = mysqli_connect($hostname, $username, $password, $dbname);

if(!$conn) {
    die("Unable to connect");
}
if ($_POST) {
    $uname = $_POST["username"];
    $pass = $_POST["password"];

    $uname = mysqli_real_escape_string($conn, $uname);
    $pass = mysqli_real_escape_string($conn, $pass);
    $sql = "SELECT * FROM users_tutorial WHERE username = '$uname' AND password = '$pass'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) == 1) {
        echo "Welcome, user!";
    } else {
        echo "incorrect username or password";
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title> Login Portal </title>
        <style type="text/css">
            input[type=text],
            input[type=password] {
                padding: 16px;
                margin: 8px;
                border: 1px solid #f1f1f1;
                letter-spacing: 1px;
                border_radius: 3px;
                width: 240px;
            }

            input[type=submit] {
                margin-left: 8px;
                width: 274px;
                border-radius: 3px;
                border: 1px solid #4285f4;
                background-color: #4285f4;
                padding: 16px;
                color: white;
                font-weigth: 600;
                cursor: pointer;
            }
        </style>
    </head>

    <body>
        <form action method="POST" autocomplete="off">
            <input type="text" name="username" placeholder="Username" /><br />
            <input type="password" name="password" placeholder="********" /><br />
            <input type="submit" name='login' value='LOGIN'>
        </form>
    </body>
</html>