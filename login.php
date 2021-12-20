<?php 
require_once 'header.php';
?>
<div class="container formContact_div w-50 mb-3">
    <div class="row">
        <h2 class="text-white mt-3 mb-3">Quel est votre demande</h2>
            <form action="includes/login_inc.php" method="POST">
                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="">Nom utilisateur</span>
                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="userId" placeholder="Votre nom ici..." required>
                </div>
                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm">mot de passe</span>
                    <input type="password" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="password" placeholder="Votre email ici..."required>
                </div>
                <button type="submit" name="submit" class="btn btn-light mb-3">Se connecter</button>
            </form>
        </div>
</div>
<?php
require_once 'footer.php';
?>