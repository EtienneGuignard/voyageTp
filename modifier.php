<?php
include_once 'header.php';
require_once 'pdo_conn.php';
$query=$bdd->prepare("SELECT * FROM sejour ");
$query->execute();
$data = $query->fetchAll();

if(isset($_GET['idSejour'])){
    $idVoyage_GET=$_GET['idSejour'];
    $voyageType='sejour';
    $idVoyage='idSejour';
    fecthVoyageData($idVoyage);
}
echo 'ID champs valid nécessaire';


function fecthVoyageData()
{
    
    if (empty($idVoyage_GET)) {
        echo 'remplissez tous les champs svp';
    }else{
        $query = $bdd->prepare('SELECT * FROM sejour WHERE idSejour = :idSejour');

        $result=$query->execute([
            'idSejour'     => $idVoyage_GET
        ]);

    if($result){
        while($data=$query->fetch()){
            include_once 'formulaireModif.php'
            ?>
            
            <?php
            if(isset($_POST['destinationPays'],$_POST['destinationVille'],$_POST['startDate'],$_POST['endDate'],$_POST['mediaLinked'],$_POST['price'],$_POST['priceChildren'], $_POST['image'], $_POST['description'])){
                $destinationPays=$_POST['destinationPays'];
                $destiantionVille=$_POST['destinationVille'];
                $startDate=$_POST['startDate'];
                $endDate=$_POST['endDate'];
                $mediaLinked=$_POST['mediaLinked'];
                $price=$_POST['price'];
                $priceChildren=$_POST['priceChildren'];
                $image=$_POST['image'];
                $description=$_POST['description'];
                // var_dump($idJeu);
//::::::::::::::////////////////////////////TO DO ::::::::::::::::::::::::::::::://///////////////////////////////////////////////////// 
                $query = $bdd->prepare(
                    "UPDATE sejour
                    SET nom = :nom, console = :console, dateSortie= :dateSortie
                    WHERE idJeu = :idJeu");
        
                $query->execute([
                    'idJeu'     =>$idJeu,
                    'nom'       =>$nom,
                    'console'   =>$console,
                    'dateSortie'=>$dateSortie
                ]);
                echo 'Bravo modification effectué <br>'; 
                // header('Location:index.php');
                }
            }
        }
    }
}
?>


<form action="" method="GET">
    <label for="idJeu" placeholer="ID JEU">ID JEU</label>
    <input type="number" id ="idJeu" name="idJeu" required> <br><br>
    <button type="submit" name="trouver"> Trouver un jeu </button>
    <a href="index.php"> Retour Accueil</a>
</form>
<?php include_once 'footer.php'?>
