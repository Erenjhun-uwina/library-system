<?php

require_once "../model/Model.class.php";

class BookCtrl extends Model
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


    public function update(string $title, string $author, string $daterelease, string $genre, string $coverimg, string $publiher, string $language, $id)
    
    {
        try {
            $this->open();
            $query = $this->conn->prepare("
            UPDATE `books` SET `title`=?,`author`=?,`date release`=?, `genre`=?, `cover img`=?,`publisher`=?, `language`=?  WHERE `id` = ? ");

            $query->bind_param("ssssssss", $title, $author, $daterelease, $genre, $coverimg, $publiher, $language, $id);
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
                DELETE FROM `books` WHERE  `id` = ? "); 

            $query->bind_param("s", $id);
            $query->execute();
        
            $this->kill();
        } catch (Exception $err) {

            $this->kill();
            throw $err;
        }
    }

}


