<?php 
setcookie("$login", "", time() - 3600, "/");
header("Location: home.html");
exit();

