<?php

require_once("../controller/StaffCtrl.php");


$fn = $_POST['Fn'];
$ln = $_POST['Ln'];
$pword = $_POST['Password'];
$uname = $_POST['Username'];

$ctrl = new StaffCtrl;
$s = $ctrl;


echo create();


function is_available(){
    global $s,$uname;

    $result = $s->select_staff("Username",$uname)->fetch_assoc();
    if($result) return "This Username is already registered to an accocunt";
    return true;
}

function create()
{
    global $s,$fn, $ln, $pword, $uname;

    $is_avail = is_available();

    if ($is_avail===true) {
        $id = $s->create($fn, $ln, $pword, $uname);
        if ($id)return "success";
    }

    return $is_avail;
}
