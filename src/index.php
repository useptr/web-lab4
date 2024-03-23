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
    while($row = $result->fetch_assoc()) {
      echo "login: " . $row["login"]. ", password: " . $row["password"]. "<br>";
    }
}

// echo $result;
// var_dump($result);
// echo "Hello";
<<<<<<< HEAD
?>
=======
?>

<form action="login.php" method="post">
        <h2>Авторизация</h2>
        <div>
        <input type="text" name="login" placeholder="Имя пользователя" required>
        </div>
        <div>
        <input type="password" name="password" placeholder="Пароль" required>
        </div>
        <input type="submit" value="Войти">
    </form>
>>>>>>> 5f44187cd2cb115ead64a47f31f0c1ad97902bb5
