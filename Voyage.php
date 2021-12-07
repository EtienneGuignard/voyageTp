
<!-- Background image -->
<div id="header-container-div" class="">
    <div class="mask-div">
    <div class="d-flex justify-content-center align-items-center h-100">
        <div class="text-header">
        <h1 class="mb-3">Voyagez dans des lieux épiques !</h1>
        <h5 class="mb-4">Lieu de tournage, sutdio, sets, et plus encore. </h5>
        <a class="btn btn-outline-light btn-lg m-2" href="#" role="button" rel="nofollow" target="_blank">Vous Inscrire</a>
        <a class="btn btn-outline-light btn-lg m-2" href="#" target="_blank"role="button">Nos meilleurs offres</a>
        </div>
    </div>
    </div>
</div>
<!-- Background image -->
<?php 
require_once 'header.php';
if(isset($_SESSION['login']) && $_SESSION['isLoggedIn']==true){
echo 'Bonjour '. $_SESSION['login'] . '<br>';
}
?>
<a href="deconnexion.php">deconnexion</a>
<main class="container">
    <div class="card mt-3 mb-3">
        <div class="row g-0">
            <div class="col-md-4">
            <img src="..." class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
    </div>
    </div>
    <div class="card mb-3">
        <div class="row g-0">
            <div class="col-md-4">
            <img src="..." class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
        </div>
    </div>
    <div class="card mb-3">
        <div class="row g-0">
            <div class="col-md-4">
            <img src="..." class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
        </div>
    </div>

</main>

<?php 
require_once 'footer.php'
?>