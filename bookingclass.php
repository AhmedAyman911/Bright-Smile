<?php
require_once("db.php");

class booking extends db
{
    private $db;
    public function __construct()
    {
        $this->db = new db();
        $this->conn=$this->db->connect(); 
    }
    public function bookapp($fname, $lname, $dr, $day, $hour)
    {

      $sql = "INSERT INTO patients_appointments (fname, lname, dr, day, hour) VALUES (?, ?, ?, ?, ?)";
      $stmt = mysqli_prepare($this->conn, $sql);
      if (!$stmt) {
        echo "Error preparing statement: " . mysqli_error($this->conn);
        return 0;
      }
      mysqli_stmt_bind_param($stmt, "ssssi", $fname, $lname, $dr, $day, $hour);
      if (mysqli_stmt_execute($stmt))
      {
          echo "Record updated successfully";
          return 1;
      }
      else 
      {
          echo "Error Adding record: " . mysqli_error($this->conn); 
          return 0;
      } 
    }

}