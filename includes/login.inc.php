<?php

if (!isset($_SESSION)) {
    session_start();
}

require_once("../controller/UserCtrl.php");
require_once("../controller/StaffCtrl.php");
require_once("../controller/AdminCtrl.php");

$uname = $_POST['user'];
$pass = $_POST['pass'];
$acc_type = $_POST['acc_type'];
$ctrl = create_ctrl($acc_type);
$id = null;


echo check_pass();


function check_pass()
{
    global $pass,$id,$acc_type;
    $real_pass = get_pass();

    if (strcmp($real_pass, $pass) == 0) {
        $_SESSION['id'] = $id;
        $_SESSION['acc_type'] = rtrim($acc_type,'s');

        return "success";
    }
    return "failed";
}

function get_pass()
{
    global $ctrl, $uname, $acc_type,$id;

    $real_user = 'Username';
    if ($acc_type == "users") $real_user = 'Student_no';

    $result = $ctrl->select_data($real_user, $uname);
    
    if(gettype($result) != "null"){
        $result = $result->fetch_assoc();
        $id = $result['Id'];
        return $result['Password'];
    }
    return false;
}

function create_ctrl(string $acc_type)
{
    if (strcmp($acc_type, "users") == 0) return new UserCtrl;
    if (strcmp($acc_type, "staffs") == 0) return new StaffCtrl;
    return new AdminCtrl;
}
