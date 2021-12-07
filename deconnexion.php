<?php
session_start();
foreach($_SESSION as $value){
    $value='';
}
session_destroy();
header('Location:Voyage.php');