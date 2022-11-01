<?php

require_once("../controller/BookCtrl.php");



$id = $_POST['Id'];
$ctrl = new BookCtrl;



$ctrl ->delete($id);
