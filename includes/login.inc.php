<?php

if (!isset($_SESSION)) {
    session_start();
}

require_once("../view/UserView.class.php");
require_once("../controller/StaffCtrl.php");
require_once("../controller/AdminCtrl.php");

$uname = $_POST['user'];
$pass = $_POST['pass'];
$acc_type = $_POST['acc_type'];
$ctrl = create_ctrl($acc_type);

$user_info;

echo check_pass();


function check_pass()
{
    global $pass, $acc_type, $user_info;
    $real_pass = get_pass();

    if (strcmp($real_pass, $pass) == 0) {
        $_SESSION['id'] = $user_info['Id'];
        $_SESSION['acc_type'] = rtrim($acc_type, 's');

        return "success";
    }
    return "failed";
}

function get_pass()
{
    global $ctrl, $uname, $acc_type, $id, $user_info;

    $real_user = 'Username';
    if ($acc_type == "users") $real_user = 'Student_no';

    $result = $ctrl->select_data($real_user."=?",$uname);


    $user_info = $result->fetch_assoc();


    if (gettype($user_info) != "NULL") {
       
        $id = $user_info['Id'];
        return $user_info['Password'];
    }
    return false;
}

function create_ctrl(string $acc_type)
{
    if (strcmp($acc_type, "users") == 0) return new UserView;
    if (strcmp($acc_type, "staffs") == 0) return new StaffCtrl;
    return new AdminCtrl;
}
