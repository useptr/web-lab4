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

    $query = "INSERT INTO users(login, password) VALUES ('$login ', '$password')";

    if ($conn->query($query) === TRUE) {
        echo "Регистрация прошла успешно.";
    } else {
        echo "Ошибка при регистрации: " . $conn->error;
    }
    $conn->close();
}