<?php

require_once("../model/Model.class.php");



//pa edit 

class AdminCtrl extends Model
{

    public function select_admin($field,$val){
        try{
            $this->open();


            $query = "SELECT * FROM `admins` WHERE $field = ?";
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

    // public function create(string $uname, string $pword)
    // {
    //     try {
    //         $this->open();

    //         $query = "INSERT INTO `admins`('username', 'password') VALUES (?,?)";
    //         $stmt = $this->conn->prepare($query);
    //         $stmt ->bind_param("ss",$uname,$pword,);
    //         $stmt ->execute();

    //         $last_id = $this->conn->insert_id;

    //         $this->kill();
    //         return $last_id;
    //     } catch (Exception $err) {

    //         $this->kill();
    //         throw $err;
    //     }
    // }

   

    public function update(string $uname, string $pword)
    {
        try {
            $this->open();
            $query = $this->conn->prepare("
            UPDATE `admins` SET `username`=?,`password`=?, WHERE 1 "); 

            $query->bind_param("ss",$uname, $pword);
            $query->execute();
    
            $this->kill();
           
        } catch (Exception $err) {

            $this->kill();
            throw $err;
        }
    }

    // public function delete($id)
    // {
    //     try {
    //         $this->open();
    //         $query = $this->conn->prepare("
    //         DELETE FROM `admins` WHERE `id` = ? "); 
    //         $query->bind_param("s", $id);
    //         $query->execute();
           

    //         $this->kill();
          
    //     } catch (Exception $err) {

    //         $this->kill();
    //         throw $err;
    //     }
    // }

}