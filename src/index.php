<?php
declare(strict_types=1);
// $servername = "mysql";
// $username = "root";
// $password = "root";
// $connection->query('CREATE DATABASE `lemp_docker`');
// $connection = mysqli_connect($servername, $username, $password);




// $sql = "INSERT INTO users (login, password) VALUES ('example_login', 'example_password')";


$dbhost = "mysql";
$dbuser = "root";
$dbpass = "root";
$dbname = "app";
$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
$sql = "SELECT * FROM `users`";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "login: " . $row["login"]. ", password: " . $row["password"]. "<br>";
    }
  }

// echo $result;
// var_dump($result);
// echo "Hello";
?>
