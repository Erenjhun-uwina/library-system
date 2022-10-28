<?php

spl_autoload_register(function($classname){

    $namespace = str_replace("\\","/",__NAMESPACE__);
    $classname = str_replace("\\","/",$classname);
    $class = (empty($namespace)?"":$namespace."/")."{$classname}.class.php";
    echo $class;
   include_once($class);
});


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


    public function update(string $fn, string $ln, string $dob, string $email, string $pass, string $country)
    {
        try {
            $this->open();
            $query = $this->conn->prepare("
            UPDATE `users` SET `FN`='[value-2]', `LN`='[value-3]', `DOB`='[value-4]', `Email`='[value-5]', `Password`='[value-6]', `Country`='[value-7]' WHERE `id` = '' "); //insert id

            $query->bind_param("ssssss", $fn, $ln, $dob, $email, $pass, $country);
            $query->execute();
            $last_id = $this->conn->update_id;

            $this->kill();
            return $last_id;
        } catch (Exception $err) {

            $this->kill();
            throw $err;
        }
    }

    public function delete(string $fn, string $ln, string $dob, string $email, string $pass, string $country)
    {
        try {
            $this->open();
            $query = $this->conn->prepare("
            DELETE FROM `users` WHERE `id` = '' "); //insert id

            $query->bind_param("ssssss", $fn, $ln, $dob, $email, $pass, $country);
            $query->execute();
            $last_id = $this->conn->delete_id;

            $this->kill();
            return $last_id;
        } catch (Exception $err) {

            $this->kill();
            throw $err;
        }
    }

}