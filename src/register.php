<?php

if (isset($_POST['login']) && isset($_POST['password'])) {
    $login = $_POST['login'];
    $login = trim($login);
    $password = $_POST['password'];
    $password = trim($password);
    $dbhost = "mysql";
    $dbuser = "root";
    $dbpass = "root";
    $dbname = "app";

    $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

    if ($conn->connect_error) {
        die ("Connection failed:". $conn->connect_error);
    }

    $query = "INSERT INTO users(login, password) VALUES ('$login', '$password')";
    $conn->query($query);
    $conn->close();
    setcookie("user", "$login", time()+3600, "/");
    header('Location: home.html');
    exit();
}
header('Location: sign_up.html');
exit();