<?php

include_once("../model/Model.class.php");


//pa edit 

class UserCtrl extends Model
{

    public function select_user($field,$val){
        try{
            $this->open();


            $query = "SELECT * FROM `admin` WHERE $field = ?";
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

    public function create(string $uname, string $pword)
    {
        try {
            $this->open();

            $query = "INSERT INTO `admin`('username', 'password') VALUES (?,?)";
            $stmt = $this->conn->prepare($query);
            $stmt ->bind_param("ss",$uname,$pword,);
            $stmt ->execute();

            $last_id = $this->conn->insert_id;

            $this->kill();
            return $last_id;
        } catch (Exception $err) {

            $this->kill();
            throw $err;
        }
    }

   

    public function update(string $uname, string $pword, $id)
    {
        try {
            $this->open();
            $query = $this->conn->prepare("
            UPDATE `users` SET `username`=?,`password`=?, WHERE `Id` =? "); 

            $query->bind_param("sss",$uname, $pword, $id);
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