<?php

require_once("../controller/UserCtrl.php");


$studno = $_POST['Studno'];
$fn = $_POST['fn'];
$ln = $_POST['ln'];
$grdsec = $_POST['grade/section'];
$email = $_POST['email'];
$connum = $_POST['contact_no'];

$ctrl = new UserCtrl;

$ctrl->create($fn, $ln, $studno, $studno, $grdsec,$email,$connum);



