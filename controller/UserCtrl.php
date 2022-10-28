<?php

include_once("./model/Model.class.php");

class UserCtrl extends Model
{

    public function create(string $fn, string $ln, string $dob, string $email, string $pass, string $country)
    {
        try {
            $this->open();
            $query = $this->conn->prepare("
            INSERT INTO `users`(`FN`, `LN`, `DOB`, `Email`, `Password`, `Country`) 
            VALUES (?,?,?,?,?,?)");

           
            $query->bind_param("ssssss", $fn, $ln, $dob, $email, $pass, $country);
            $query->execute();
            $last_id = $this->conn->insert_id;

            $this->kill();
            return $last_id;
        } catch (Exception $err) {

            $this->kill();
            throw $err;
        }
    }


    public function update(string $fn, string $ln, string $dob, string $email, string $pass, string $country, $id)
    {
        try {
            $this->open();
            $query = $this->conn->prepare("
            UPDATE `users` SET `FN`=?, `LN`=?, `DOB`=?, `Email`=?, `Password`=?, `Country`=? WHERE `id` = ? "); 

            $query->bind_param("sssssss", $fn, $ln, $dob, $email, $pass, $country, $id);
            $query->execute();
            $last_id = $this->conn->update_id;

            $this->kill();
            return $last_id;
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