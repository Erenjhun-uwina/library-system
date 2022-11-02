<?php

require_once("../controller/StaffCtrl.php");



$id = $_POST['Id'];
$ctrl = new StaffCtrl;



$ctrl ->delete($id);
