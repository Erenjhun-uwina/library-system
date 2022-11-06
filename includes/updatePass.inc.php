<?php


if (!isset($_SESSION)) {
    session_start();
}

require_once("../view/UserView.class.php");
require_once("../view/StaffView.class.php");
require_once("../view/AdminView.class.php");


$ctrl = new_ctrl();
$id = $_SESSION['id'];
$newpword = $_POST["new_pass"];
$oldpass = $_POST["old_pass"];

$person = $ctrl->select_data("Id=?",$id)->fetch_assoc();



if (check_pass()) {
    $ctrl->update('Password = ?',$newpword,$id);
    echo "success";
    return;
}
echo "incorrect password";





function check_pass(){

    global $person,$oldpass;

    $real_pass = $person['Password'];

    return strcmp($real_pass,$oldpass) == 0;
   
}


function new_ctrl()
{   
    $acc_type = $_SESSION['acc_type'];
    if($acc_type == "user")return new UserView;
    if($acc_type == "staff")return new StaffView;
    return new AdminView;
}
