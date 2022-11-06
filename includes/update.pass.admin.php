<?php


if (!isset($_SESSION)) {
    session_start();
}

require_once("../controller/UserCtrl.php");

$ctrl = new UserCtrl;
$id = $_SESSION['id'];
$newpword = $_POST["new_pass"];
$oldpass = $_POST["old_pass"];

$ctrl->update('Password=? ',$newpword,$id);



