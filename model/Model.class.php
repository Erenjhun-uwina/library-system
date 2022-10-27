<?php

class Model
{
    protected $conn;

    public function open()
    {
        $db_server = "localhost";
        $db_user = "root";
        $db_pass = "";
        $db_name = "ws101";
        $this->conn = new mysqli($db_server, $db_user, $db_pass, $db_name);

        if ($this->conn->connect_error) die("connnection error: " . $this->conn->connect_error);
    }

    public function kill()
    {
        $this->conn->close();
    }

}



