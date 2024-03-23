<?php

if (isset($_POST['login']) && isset($_POST['password'])) {
    $login = $_POST['login'];
    $password = $_POST['password'];
    $dbhost = "mysql";
    $dbuser = "root";
    $dbpass = "root";
    $dbname = "app";

    $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

    if ($conn->connect_error) {
        die ("Connection failed:". $conn->connect_error);
    }

    $query = "SELECT * FROM users WHERE login = '$login' AND password = '$password'";

    $result = $conn->query($query);

    if ($result->num_rows > 0) {    
        setcookie("user", "$login", time()+3600, "/");
        header('Location: home.html');
        exit();
    } else {
        exit();
    }
    $conn->close();
}
