<?php

if(isset($_POST["book"]))
{
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $dr = $_POST["drs"];
    $day = $_POST["day"];
    $hour = $_POST["hour"];

    include "../OOOSE project Website/db.php";
    include "../OOOSE project Website/bookingclass.php";
    include "../OOOSE project Website/book.contr.php";
    $book = new bookcontr($fname,$lname,$dr,$day,$hour);
    $result = $book->booknow();
    if($result == true){
      $book2 = new booking();
      $book2 = $book2->bookapp($fname,$lname,$dr,$day,$hour);
      header("location:index.html"); 
    }
}