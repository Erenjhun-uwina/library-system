<?php
require_once("../controller/StaffCtrl.php");

class StaffView extends StaffCtrl{

    public function full_name($id)
    {
        $staff  = $this->select_data("Id = ?",$id)->fetch_assoc();
        echo $staff['FN']." ".$staff['LN'];
        
    }

    public function username($id)
    {

        $staff  = $this->select_data("Id = ?",$id)->fetch_assoc();
        echo $staff['Username'];
    }

    public function select_data($where,$val){
        return parent::select_data($where,$val);
    }
    // public function 
}                                                              