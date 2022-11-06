<?php

require_once("../controller/BookCtrl.php");


$title = $_POST['book_search'];
// $genre = $_POST['genre'];

$ctr = new BookCtrl;

$resut = $ctr->select_data("Title LIKE ?","%$title%");

$resut = $resut->fetch_all(MYSQLI_ASSOC);

usort($resut,"keywordpos");



foreach($resut as $row){

    echo "<p data-id='".$row['Id']."'>".$row['Title']."</p>";
}



function keywordpos($res1,$res2){

    global  $title;
    $title = strtoupper($title);

    $pos1 = strpos($res1['Title'],$title);
    $pos2 = strpos($res2['Title'],$title);

    if($pos1==$pos2)return 0; 
    return ($pos1<$pos2)?-1:1;
}

