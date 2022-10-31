<?php



require_once("../controller/UserCtrl.php");



$uname = $_POST['user'];
$pass = $_POST['pass'];
$acc_type = $_POST['acc_type'];


$ctrl = new UserCtrl;


echo check_pass();



function check_pass()
{   
    global $pass;
    $real_pass = get_pass();

    if (strcmp($real_pass,$pass)==0)return "success";
    return "failed";
}

function get_pass()
{   
    global $ctrl;
    global $uname;

    $result = $ctrl->select_user("Student_no",$uname);
    return $result->fetch_assoc()['Password'];
}