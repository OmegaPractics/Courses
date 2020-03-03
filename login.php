<?php
session_start();
?>

<!doctype html>
<html lang='en'>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>DOCUMENT</title>
</head>
<body>
<div class="container">
    <form class="form-signin" method="POST">
        <h2>АВТОРИЗАЦИЯ</h2>

        <input type="text" name="username" class="form-control" placeholder="Username" required>
        <input type="password" name="password" class="form-control" placeholder="Password" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
        <a href="indeh.php" class="btn btn-lg btn-primary btn-block">Регистрация</a>

    </form>
</body>

<?php

$connection = mysqli_connect('localhost','root','');
$select_db = mysqli_select_db($connection, 'test');


if (isset($_POST['username']) and isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE username='$username' and password='$password'";
    $result = mysqli_query($connection, $query) or die(mysqli_error($connection));
    $count = mysqli_num_rows($result);

    if ($count == 1) {
        $_SESSION['username'] = $username;
        echo 'Hello!'. $username."";
        echo "<a href='logout.php' class='btn btn-lg btn-primary'> Logout </a>";
    } else {
        $fsmsg = 'Ошибка!';
    }
}

if (isset($SESSION['username'])) {
    $username = $_SESSION['username'];
    echo 'Hello!'. $username."";
    echo "<a href='logout.php' class='btn btn-lg btn-primary'> Logout </a>";
}
?>