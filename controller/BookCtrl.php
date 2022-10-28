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
            INSERT INTO `books`(`title`, `author`, `date release`, `genre`, `cover img`, `publisher`, `language`) 
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


    public function update(string $title, string $author, string $daterelease, string $genre, string $coverimg, string $publiher, string $language)
    
    {
        try {
            $this->open();
            $query = $this->conn->prepare("
            UPDATE `books` SET `title`='[value-2]',`author`='[value-3]',`date release`='[value-4]', `genre`='[value-5]', `cover img`='[value-6]',`publisher`='[value-7]', `language`='[value-8]'  WHERE `id` = '' "); //insert id

            $query->bind_param("sssssss", $title, $author, $daterelease, $genre, $coverimg, $publiher, $language);
            $query->execute();
            $last_id = $this->conn->update_id;

            $this->kill();
            return $last_id;
        } catch (Exception $err) {

            $this->kill();
            throw $err;
        }
    
    }

    public function delete(string $title, string $author, string $daterelease, string $genre, string $coverimg, string $publiher, string $language)
    
    {
        try {
            $this->open();
            $query = $this->conn->prepare("
                DELETE FROM `books` WHERE  `id` = '' "); //insert id

            $query->bind_param("sssssss", $title, $author, $daterelease, $genre, $coverimg, $publiher, $language);
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


