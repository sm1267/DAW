<?php

if(isset($_POST["submit"]))
{   
    $uid = $_POST["uid"];    
    $pwd = $_POST["pwd"];
    $pwdrepeat = $_POST["pwdrepeat"];

    include "../classes/dbh.classes.php";
    include "../classes/signup.classes.php";
    include "../classes/signup-contr.classes.php";

    $signup = new SignupContr($uid, $pwd, $pwdrepeat);

    $signup->signupUser();

    header("location: ../index.php?error=none");
}