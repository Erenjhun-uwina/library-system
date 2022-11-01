<?php

include_once("../model/Model.class.php");

class UserCtrl extends Model
{

    

    public function select_user($field,$val){
        try{
            $this->open();


            $query = "SELECT * FROM `users` WHERE $field = ?";
            $stmt = $this->conn->prepare($query);
            $stmt->bind_param('s',$val);
            $stmt->execute();           

            $result = $stmt->get_result();
            $stmt->close();
            $this->kill();

            return $result;
        }
        catch(Exception $err){

            $this->kill();
            throw $err;
        }
    }

    public function create(string $FN, string $LN, string $Student_no, string $Pass, string $Grade_sec, string $Email, $Contact_no)
    {
        try {
            $this->open();

            $query = "INSERT INTO `users`(`FN`, `LN`, `Student_no`, `Password`, `Grade_sec`, `Email`, `Contact_no`) VALUES (?,?,?,?,?,?,?)";
            $stmt = $this->conn->prepare($query);
            $stmt ->bind_param("sssssss", $FN, $LN, $Student_no ,$Pass, $Grade_sec, $Email, $Contact_no);
            $stmt ->execute();

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