<?php


if (!isset($_SESSION)) {
    session_start();
}

require_once("../controller/StaffCtrl.php");

$ctrl = new StaffCtrl;
$id = $_SESSION['id'];
$newpword = $_POST["new_pass"];
$oldpass = $_POST["old_pass"];

$ctrl->update('Password=? ',$newpword,$id);



