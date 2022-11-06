<?php

if (!isset($_SESSION)) {
    session_start();
}
$acctype = $_SESSION['acc_type'];

$_SESSION['id']=null;
$_SESSION['acc_type'] =null;

$acctype = ($acctype == "user")?"index.php":"$acctype.login.php";

header("location:../login/$acctype");




