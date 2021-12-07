<div class="container formContact_div w-50 mb-3">
    <div class="row">
        <h2 class="text-white mt-3 mb-3">Quel est votre demande</h2>
            <form action="" method="POST">
                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Pays</span>
                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="name" placeholder="Votre nom ici..." required value="<?php echo $data['destinationPays'];?>">
                </div>
                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Ville</span>
                    <input type="email" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="email" placeholder="Votre email ici..." value="<?php echo $data['destinationVille'];?>" required >
                </div>
                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Date de départ</span>
                    <input type="tel" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="tel" placeholder="Votre numéro ici ici..." value="<?php echo $data['startDate'];?>" required>
                </div>
                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Date de retour</span>
                    <input type="tel" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="tel" placeholder="Votre numéro ici ici..." value="<?php echo $data['endDate'];?>" required>
                </div>
                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Media</span>
                    <input type="tel" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="tel" placeholder="Votre numéro ici ici..." value="<?php echo $data['mediaLinked'];?>" required>
                </div>
                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm">prix adulte</span>
                    <input type="tel" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="tel" placeholder="Votre numéro ici ici..." value="<?php echo $data['price'];?>" required>
                </div>
                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm">prix enfants</span>
                    <input type="tel" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="tel" placeholder="Votre numéro ici ici..." value="<?php echo $data['priceChildren'];?>" required>
                </div>
                <!-- <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Hotel</span>
                    <input type="tel" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="tel" placeholder="Votre numéro ici ici..." value="<?php 
                    // echo $data['hotelName'];
                    ?>">
                </div> -->
                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm">image</span>
                    <input type="tel" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="tel" placeholder="Votre numéro ici ici..." value="<?php echo $data['image'];?>" required>
                </div>
                <div class="mb-3">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="commentaire" placeholder="votre commentaire ici..." value="<?php echo $data['description'];?>" ></textarea>
                </div>
                <button type="submit" class="btn btn-light mb-3">Envoyer</button>
            </form>
        </div>
</div>