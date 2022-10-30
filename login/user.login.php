<!DOCTYPE html>
<html lang="en">

<head>
    <link href="../style/admin.login.css" rel="stylesheet" type="text/css">
    <link href="../style/user.login.css" rel="stylesheet" type="text/css">
    <script src="./js/login.js" defer></script>
</head>

<body>

   <img id="logbg" src='../assets/bg.png'>

    <form id="form" action="" method="post" data-acc_type="user">
        <div class="imgcontainer">
            <img id="logo" src='../assets/logo.png'>
        </div>
        <div class="container">

            <input type="text" placeholder="Username" name="user" required><br>
            <input type="password" placeholder="Password" name="pass" required><br>
            <button id="submit" type="submit">Login</button>
            <label>
        </div>
    </form>

</body>

</html>