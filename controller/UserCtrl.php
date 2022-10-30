<?php
include_once("./model/Model.class.php");

class UserCtrl extends Model
{

    public function create(string $FN, string $LN, string $Student_no, string $Pass, string $Grade_sec, string $Email, $Contact_no)
    {
        try {
            $this->open();

            $query = $this->conn->prepare("
            INSERT INTO `users`(`FN`, `LN`, `Student_no`, `Password`, `Grade_sec`, `Email`, `Contact_no`) VALUES (?,?,?,?,?,?,?)
            ");
            
            $query->bind_param("sssssss", $FN, $LN, $Student_no ,$Pass, $Grade_sec, $Email, $Contact_no);
            $query->execute();
            $last_id = $this->conn->insert_id;

            $this->kill();
            return $last_id;
        } catch (Exception $err) {

            $this->kill();
            throw $err;
        }
    }


    public function update(string $FN, string $LN, string $Student_no, string $Pass, string $Grade_sec, string $Email, $Contact_no, $id)
    {
        try {
            $this->open();
            $query = $this->conn->prepare("
            UPDATE `users` SET `FN`=?,`LN`=?,`Student_no`=?,`Password`=?,`Grade_sec`=?,`Email`=?,`Contact_no`=? WHERE `Id` =? "); 

            $query->bind_param("ssssssss", $FN, $LN, $Student_no, $Pass, $Grade_sec, $Email, $Contact_no, $id);
            $query->execute();
    

            $this->kill();
           
        } catch (Exception $err) {

            $this->kill();
            throw $err;
        }
    }

    public function delete($id)
    {
        try {
            $this->open();
            $query = $this->conn->prepare("
            DELETE FROM `users` WHERE `id` = ? "); 
            $query->bind_param("s", $id);
            $query->execute();
           

            $this->kill();
          
        } catch (Exception $err) {

            $this->kill();
            throw $err;
        }
    }

}