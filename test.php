<?php

require_once("./controller/UserCtrl.php");

$ctrl = new UserCtrl;

echo $ctrl->create("erejhun","chonggus","2003-11-29","erejhun@gmail.com","chongusss","phil");