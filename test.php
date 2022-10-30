<?php

require_once("./controller/UserCtrl.php");
require_once("./controller/BookCtrl.php");






$Book = new BookCtrl;
// $Book -> create("The World", "LopezVito","10-10-2000", "Fantasy", "" , "Amazon Inc.", "English" );


// $Book -> DELETE ("6");

$Book -> update("The world ver.2", "Lim", "12-12-2020", "Fantasy"," ", "books.Inc", "English", 7);


// echo $ctrl->create("erejhun","chonggus","2003-11-29","erejhun@gmail.com","chongusss","phil");


