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

    public function create(string $title, string $author, string $daterelease, string $genre, string $coverimg, string $publiher, string $language)
    {
        try {
            $this->open();
            $query = $this->conn->prepare("
            INSERT INTO `users`(`title`, `author`, `date release`, `genre`, `cover img`, `publisher`, `language`) 
            VALUES (?,?,?,?,?,?,?)");

            $query->bind_param("sssssss", $title, $author, $daterelease, $genre, $coverimg, $publiher, $language);
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


