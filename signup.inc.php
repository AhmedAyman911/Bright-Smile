<?php

if(isset($_POST["submit"]))
{
    //get data
    $uname = $_POST["uname"];
    $password = $_POST["password"];
    $confirmpassword = $_POST["confirmpassword"];
    $age = $_POST["age"];
    $mail = $_POST["mail"];
    $phonenum = $_POST["phonenum"];

    //(create) signup.contr
    include "../OOOSE project Website/db.php";
    include "../OOOSE project Website/signup.classes.php";
    include "../OOOSE project Website/signup.contr.classes.php";
    

    //running error handlers and user signup

    $signup = new SignupContr($uname, $password,$confirmpassword,$age, $mail,$phonenum);
    $signup->signupUser();
    $signup2 = new SignupContr($uname, $password,$confirmpassword,$age, $mail,$phonenum);
    $result = $signup2->checkuser($uname,$mail); 
    if($result == true){
    $signup3 = new Signup();
    $signup3->setuser($uname, $password,$mail, $age,$phonenum);
    header("location:index.html");
}else{
    header("location:regest.php?error=Name-or-Email-is-already-taken");
}
    //going back to front page
    //header("location: home.html");


}