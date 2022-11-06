<?php
require_once("../controller/BookCtrl.php");

class BookView extends BookCtrl{

    public function title($id)
    {
        $book = $this->select_data("Id = ?",$id)->fetch_assoc();
        echo $book['Title'];
    }

    public function select_data($where,$val){
        return parent::select_data($where,$val);
    }
    // public function 
}                                                              