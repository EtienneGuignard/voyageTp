<?php 
require_once 'header.php';
date_default_timezone_set("Europe/Paris");
?>
<?php
$flag=true;
if(!empty($_POST)){
    foreach($_POST as $value){
        if(!isset($value)){
            echo 'remplissez tous les champs';
            $flag=false;
            return;
        }
        if(empty($value)){
            echo 'remplissez tous les champs';
            $flag=false;
            return;
        }
    }
    if ($flag) {
        $name=$_POST['name'];
        $email=$_POST['email'];
        $phone = $_POST['tel'];
        $message = $_POST['commentaire'];
        $date= date('Y/m/d h:i:s', time());
        checkCharacterLenght($name);
        validEmail($email);
        validNumber($phone);
        $query=$bdd->prepare("INSERT INTO contact( name, email, phone, message, dateMessage) VALUES (:name,:email,:phone,:message, :dateMessage)");
        $query->execute([
            'name'       =>$name,
            'email'      =>$email,
            'phone'      =>$phone,
            'message'    => $message,
            'dateMessage'=>$date
        ]);
        echo'votre message a bien été pris en compte';
    }
}
function validEmail($email){
    $pattern = "/^[_a-z0-9-]{2,}+(\.[_a-z0-9-]+)*@[a-z0-9-]{2,}+(\.[a-z]{2,3})$/";
    $email=strtolower($email);
    $email=str_replace(' ', '', $email);
    if(!preg_match($pattern, $email)){
        echo 'email invlaid';
        exit();
    }
}
function validNumber($phone)
{
    $phone=str_replace(' ', '', $phone);
    
    if(!preg_match("/^[\+0-9]{12}|[0-9]{10}$/", $phone)) {
        echo 'phone';
        exit();
    }
}
function checkCharacterLenght($name)
{
    if(!strlen($name)>2){
        echo 'nom trop court';
        exit();
    }
}


?>
<div class="container formContact_div w-50 mb-3">
    <div class="row">
        <h2 class="text-white mt-3 mb-3">Quel est votre demande</h2>
            <form action="" method="POST">
                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Nom</span>
                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="name" placeholder="Votre nom ici..." required>
                </div>
                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm">email</span>
                    <input type="email" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="email" placeholder="Votre email ici..."required>
                </div>
                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm">N° de téléphone</span>
                    <input type="tel" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="tel" placeholder="Votre numéro ici ici..." required>
                </div>
                <div class="mb-3">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="commentaire" placeholder="votre commentaire ici..."></textarea>
                </div>
                <button type="submit" class="btn btn-light mb-3">Envoyer</button>
            </form>
        </div>
</div>
<?php 
require_once ('footer.php');
?>
