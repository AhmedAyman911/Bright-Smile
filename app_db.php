<?php

class database
{
    public $host = "localhost";
    public $user = "root";
    public $password = "";
    public $dbname = "clinic";
    public $conn;
    public function connect() {
        $conn = mysqli_connect($this->host, $this->user, $this->password, $this->dbname);
        if ($conn)
            return $conn;
        else 
        {
            return false;
        }
    }
  }
  ?>