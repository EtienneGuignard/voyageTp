<?php 
require_once 'header.php';

if (isset($_POST['login'],$_POST['password'])) {
$query = $bdd->prepare("SELECT * FROM user WHERE login=:login AND password= :password"); 
$query->execute([
    'login' => $_POST['login'],
    'password' => $_POST['password']
]); 
    $data=$query->fetch();
    if(!empty($data)){
        $_SESSION['login']=$data['login'];
        $_SESSION['role']=$data['role'];
        $_SESSION['emailUser']=$data['emailUser'];
        $_SESSION['password']=$data['password'];
        $_SESSION['IdUser']= $data['idUser'];
        $_SESSION['isLoggedIn']=true;
        header('Location:Voyage.php');
    }else{
        echo'mauvais userid or mdp';
    }
}
?>

<div class="container formContact_div w-50 mb-3">
    <div class="row">
        <h2 class="text-white mt-3 mb-3">Quel est votre demande</h2>
            <form action="" method="POST">
                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="">Nom utilisateur</span>
                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="login" placeholder="Votre nom ici..." required>
                </div>
                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm">mot de passe</span>
                    <input type="password" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="password" placeholder="Votre email ici..."required>
                </div>
                <button type="submit" class="btn btn-light mb-3">Se connecter</button>
            </form>
        </div>
</div>


<?php
require_once 'footer.php';
?>