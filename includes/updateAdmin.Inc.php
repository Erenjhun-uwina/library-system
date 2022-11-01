<?php

require_once("../controller/AdminCtrl.php");




$uname = $_POST['Username'];
$pword = $_POST['Password'];
$ctrl = new AdminCtrl;


$ctrl->update($uname, $pword);


