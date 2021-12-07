<?php 
require_once 'header.php'
?>  
    <div class="container mt-5 mb-5">
        <h1>Nos séjours All Inclusive</h1>
    </div>
<?php
    $query=$bdd->query("SELECT * FROM allinclusive ");

        
    while($data= $query->fetch()){
        ?>

        <main class="container">
            <div class="card container-div-card mb-3">
                <div class="row g-0">
                    <div class="col-md-4">
                    <img src="<?php echo $data['image'] ?>" class="img-fluid rounded-start" alt="image <?php echo $data['destinationVille'] ?>">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $data['destinationPays'] . ', ' . $data['destinationVille']?></h5>
                            <p class="card-text"><?php echo 'Du ' .  strftime("%A %d %B %G", strtotime($data['startDate'])) . ' au ' . strftime("%A %d %B %G", strtotime($data['endDate'])) ?></p>
                            <p class="card-text"><?php echo 'Un séjour dans le luxueux hotel, ' .  $data['hotelName'] ?></p>
                            <p class="card-text"><?php echo 'Sur les traces de : ' .  $data['mediaLinked'] ?></p>
                            <p class="card-text"><?php echo $data['description'] ?></p>
                            <p class="card-text fw-bold"><?php echo $data['price']?> &euro;</p>
                            <div class="btn-div-card">
                                <a href="#" class="btn btn-dark btn-a-card">Reservez votre voyage</a>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </main>
<?php  } ?>

<?php 
require_once 'footer.php'
?>