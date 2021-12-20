<?php
echo'nnnn';
if (isset($_POST["submit"])) 
{
    echo'jjj';
    //recup data
    $userId= $_POST["userId"];
    $password= $_POST["password"];
    
    //sign up control class
    include "../classes/dbh_classescopy.php";
    include "../classes/login_classescopy.php";
    include "../classes/loginContrl_classes.php";
    $login= new LoginContr($userId, $password);
    // verif erreurs
    $login->loginUser();

    // back front page
    header('Location:../Voyage.php?error=none');
}

