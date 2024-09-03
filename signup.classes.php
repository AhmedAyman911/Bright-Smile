<?php

require_once("db.php");

class Signup 
{
    private $db;
    private $conn;
    public function __construct(){
       
        $this->db = new db();
        $this->conn=$this->db->connect(); 
    }
    public function setuser($uname,$password,$mail,$age,$phoneNum){

    
        $sql = "INSERT INTO users (name,pass,mail,age,phone_num) VALUES (?,?,?,?,?)";
        $stmt = mysqli_prepare($this->conn, $sql);
        mysqli_stmt_bind_param($stmt, "sssii", $uname,$password,$mail,$age,$phoneNum);
        if (mysqli_stmt_execute($stmt))
        {
            // Records created successfully. Redirect to landing page
            echo "Record updated successfully";
            return 1;
        }
        else 
        {
            echo "Error Adding record: " . $this->conn->error; 
            return 0;
        } 
    }

    
}
