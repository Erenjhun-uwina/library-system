<?php

if (!isset($_SEESION)) {
    session_start();
}

if (!isset($_SESSION['acc_type'])) {
    $_SESSION['acc_type'] = "";
}

if (isset($_SESSION['id']) and $_SESSION['acc_type']=="admin") {
    header("location:../index/admin.index.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link href="../style/admin.login.css" rel="stylesheet" type="text/css">
    <script src="./js/login.js" defer></script>

</head>

<body>

    <img id="logbg" src='../assets/bg.png'>

    <form id="form" data-acc_type="admin">
        <div class="imgcontainer">
            <img id="logo" src='../assets/logo.png'>
        </div>s
        <div class="container">
            <input type="text" placeholder="Username" name="user" required><br>
            <input type="password" placeholder="Password" name="pass" required><br>
            <button id="submit" type="submit">Login</button>
        </div>
    </form>
</body>

</html>