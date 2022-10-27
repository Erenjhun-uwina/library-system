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


    public function update()
    {
        $this->open();

        $this->kill();
    }

    public function delete()
    {
        $this->open();
        $this->kill();
    }

}