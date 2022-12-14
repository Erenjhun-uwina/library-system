<?php
require_once("../controller/UserCtrl.php");

class UserView extends UserCtrl{

    public function full_name($id)
    {
        $user  = $this->select_data("Id = ?",$id)->fetch_assoc();
        echo $user['FN']." ".$user['LN'];
    }

    public function select_data($where,$val){
        return parent::select_data($where,$val);
    }

    public function student_no($id){
        $user  = $this->select_data("Id = ?",$id)->fetch_assoc();
        echo $user['Student_no'];
    }
} 


