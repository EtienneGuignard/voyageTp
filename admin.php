<?php
require_once 'header.php';
if (condition) {
    # code...
}
$role=0;

if ($role!=0) {
    echo "vous n'avez pas les droit daministarteur";
    header('Location:Voyage.php');
}
$query=$bdd->query("SELECT * FROM sejour");
$data= $query->fetchAll();
?>
    <div class="container">
        <table>
            <thead>
                <th>id Voyage</th>
                <th>Pays</th>
                <th>Ville</th>
                <th>Date de départ</th>
                <th>date de retour</th>
                <th>Media</th>
                <th>Prix</th>
                <th>Prix enfant</th>
                <th>Description</th>
                <th>Modifier</th>
                <th>Supprimer</th>
            </thead>     
<?php
foreach ($data as $value) {
?>
    <tr>
        <td><?php echo $value['idSejour'] ?></td>
        <td><?php echo $value['destinationPays'] ?></td>
        <td><?php echo $value['destinationVille'] ?></td>
        <td><?php echo $value['startDate'] ?></td>
        <td><?php echo $value['endDate'] ?></td>
        <td><?php echo $value['mediaLinked'] ?></td>
        <td><?php echo $value['price'] ?></td>
        <td><?php echo $value['priceChildren'] ?></td>
        <td><?php echo $value['description'] ?></td>
        <td><a href="modifier.php?idJeu=<?php echo $value['idSejour'];?>">modifier</a></td>
        <td><a href="supprimer.php?idJeu=<?php echo $value['idSejour'];?>">supprimmer</a></td>
    </tr>
<?php
}
?>
</table>

<?php
$query=$bdd->query("SELECT * FROM allinclusive");
$data= $query->fetchAll();
?>
        <table class="mt-5 mb-3">
            <thead>
                <th>id Voyage</th>
                <th>Pays</th>
                <th>Ville</th>
                <th>Date de départ</th>
                <th>date de retour</th>
                <th>Media</th>
                <th>Prix</th>
                <th>Prix enfant</th>
                <th>Description</th>
                <th>Modifier</th>
                <th>Supprimer</th>
            </thead>     
<?php
foreach ($data as $value) {
?>
    <tr>
        <td><?php echo $value['idAllinclusive'] ?></td>
        <td><?php echo $value['destinationPays'] ?></td>
        <td><?php echo $value['destinationVille'] ?></td>
        <td><?php echo $value['startDate'] ?></td>
        <td><?php echo $value['endDate'] ?></td>
        <td><?php echo $value['mediaLinked'] ?></td>
        <td><?php echo $value['price'] ?></td>
        <td><?php echo $value['priceChildren'] ?></td>
        <td><?php echo $value['description'] ?></td>
        <td><a href="modifier.php?idJeu=<?php echo $value['idAllinclusive'];?>">modifier</a></td>
        <td><a href="supprimer.php?idJeu=<?php echo $value['idAllinclusive'];?>">supprimmer</a></td>
    </tr>
<?php
}
?>
</table>
</div>



<?php 
require_once 'footer.php';
?>