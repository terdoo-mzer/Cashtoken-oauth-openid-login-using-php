<?php
// $baseUrl = 'http://localhost:3000';
  session_start();
  if (isset($_SESSION['user_data'])) {
    header('location:http://localhost:3000/dashboard.php');
    die();
  }

  if ( strstr($_SERVER['REQUEST_URI'], '/callback?') != '' ) {
    header('location:http://localhost:3000/auth.php'.str_replace('/callback', '', $_SERVER['REQUEST_URI']));
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="./assets/style.css">
</head>
<body>
    <!-- <p><?= $str ?></p> -->
    <div class="container">
        <a class="btn" href="http://localhost:3000/auth.php">Login with Cashtoken</a>
    </div>
</body>
</html>