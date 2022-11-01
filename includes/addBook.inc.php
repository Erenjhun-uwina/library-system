<?php

require_once("../controller/BookCtrl.php");


$title = $_POST['Title'];
$author= $_POST['Author'];
$daterelease = $_POST['Date_release'];
$genre = $_POST['genre'];
$coverimg = $_POST['Cover_img'];
$publisher = $_POST['Publisher'];
$language = $_POST['Language'];
$ctrl = new BookCtrl;



echo create();


function is_available(){
    global $ctrl,$Title;

    $result = $ctrl->select_book("Title",$Title)->fetch_assoc();
    
    if($result) return "This Book is already added";
    return true;
}

function create()
{
    global $ctrl,$title, $author, $daterelease, $genre, $coverimg, $publiher, $language;

    $is_avail = is_available();

    if ($is_avail===true) {
        $id = $ctrl->create( $title, $author, $daterelease, $genre, $coverimg, $publiher, $language);
        if ($id)return "success";
    }

    return $is_avail;
}
