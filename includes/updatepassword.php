<?php

require_once("../controller/UserCtrl.php");

$ctrl = new UserCtrl;
$id =$_SESSION;
$newpword = $_POST["new_pass"];
$oldpass = $_POST["old_pass"];
$ctrl->update('Password=?',"new_pass");



