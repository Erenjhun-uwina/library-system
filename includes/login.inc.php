<?php


require_once("../controller/UserCtrl.php");


$user = new UserCtrl;


$user = $_POST['user'];
$pass = $_POST['pass'];
$acc_type = $_POST['acc_type'];

// 


echo "$user $pass $acc_type";
echo "includess";



function check_user(){

}

function check_pass(){

}