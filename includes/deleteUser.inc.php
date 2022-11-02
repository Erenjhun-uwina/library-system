<?php

require_once("../controller/UserCtrl.php");



$id = $_POST['Id'];
$ctrl = new UserCtrl;



$ctrl ->delete($id);
