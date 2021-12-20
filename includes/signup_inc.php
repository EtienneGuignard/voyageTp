<?php
echo'nnnn';
if (isset($_POST["submit"])) 
{
    echo'jjj';
    //recup data
    $userId= $_POST["userId"];
    $email= $_POST["email"];
    $password= $_POST["password"];
    $pwdRepeat= $_POST["pwdRepeat"];
    
    //sign up control class
    include "../classes/dbh_classes.php";
    include "../classes/signup_classes.php";
    include "../classes/signupContrl_classes.php";
    $signup= new SignupContr($userId, $email, $password, $pwdRepeat);
    // verif erreurs
    $signup->signupUser();

    // back front page
    header('Location:../Voyage.php?error=none');
}

