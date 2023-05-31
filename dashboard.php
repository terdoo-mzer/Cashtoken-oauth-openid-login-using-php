<?php 
session_start();

if (isset($_SESSION['active']) && (time() - $_SESSION['active'] > 600)) {
  header('location: http://localhost:3000/openid.php?logout');
  die();
}
$_SESSION['active'] = time();

if (!isset($_SESSION['user_data'])) {
  header('location: http://localhost:3000');
  die();
} 

$data = json_decode($_SESSION['user_data']);
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
    <a class="btn" href="http://localhost:3000/auth.php?logout">Logout</a>
    <div class="container">
        <?php
            print_r($data);
            echo "<pre>";
        ?>

        <?php if(isset($_SESSION)) {?>
            <?= print_r($_SESSION)?>
        <?php } ?>
    </div>
</body>
</html>