<?php
session_start();
if (isset($_SESSION['active']) && (time() - $_SESSION['active'] > 600)) {
    header('location: http://localhost:3000/auth.php?logout');
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <!-- <p><?= $str ?></p> -->
    <a class="btn logout_btn" href="http://localhost:3000/auth.php?logout">Logout</a>


    <div class="container">
        <p class="title"><span class="bold">User ID: </span><span><?= $data->user_id ?></span></p>
        <p class="title"><span class="bold">Username: </span><span><?= $data->username ?></span></p>
        <p class="title"><span class="bold">Display Name: </span><span><?= $data->display_name ?></span></p>
        <p class="title"><span class="bold">First Name: </span><span><?= $data->first_name ?></span></p>
        <p class="title"><span class="bold">Last Name: </span><span><?= $data->last_name ?></span></p>
        <p class="title"><span class="bold">Email: </span><span><?= $data->email ?></span></p>
    </div>

</body>

</html>