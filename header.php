<?php  
session_start();
require_once 'pdo_conn.php';
setlocale(LC_TIME, "fr_FR", "French");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voyage sur lieux tournages TV et Film</title>
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>

<!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-3">
    <div class="container-fluid">
        <a class="navbar-brand" href="Voyage.php">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="Voyage.php">Accueil</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="sejour.php">Sejour</a>
            </li>
            <li class="nav-item"><a class="nav-link" href="allInclusive.php">All inclusive</a></li>
            <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
            <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
            <li class="nav-item"><a class="nav-link" href="signup.php">s'enregistrer</a></li>
            <li class="nav-item"><a class="nav-link" href="admin.php">Admin</a></li>
            <?php
            if(isset($_SESSION['userid'])){?>
                <li class="nav-item"><a class="nav-link" href=""><?php echo $_SESSION['login'] ?></a></li>
                <li class="nav-item"><a class="nav-link" href="deconnexion.php">deco</a></li>
            
            <?php }
            ?>

        </ul>
        <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Rechercher</button>
        </form>
        </div>
    </div>
    </nav>
</header>
    
