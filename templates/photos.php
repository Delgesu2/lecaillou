<?php
$title = "Le Caillou - Photos";
ob_start();
?>

<div container-fluid>
<div class="row">
<div class="col-12 offset-sm-1 col-sm-10">
<!-- Carousel -->
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner border border-light">
    <div class="carousel-item active">
      <img class="d-block w-100" src="contenu/images/bzzz.jpg" alt="bourdon">
      <div class="carousel-caption d-none d-sm-block">
          <h5>Dans le jardin ...</h5>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="contenu/images/maison.jpg" alt="fa&ccedil;ade maison">
      <div class="carousel-caption d-none d-sm-block">
        <h5>Fa&ccedil;ade de la maison</h5>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="contenu/images/chambre3.jpg" alt="chambre cerise">
      <div class="carousel-caption d-none d-sm-block">
          <h5>Chambre Cerise</h5>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="contenu/images/maison2.jpg" alt="entr&eacute;e cuisine">
      <div class="carousel-caption d-none d-sm-block">
          <h5>Entr&eacute;e cuisine</h5>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="contenu/images/maison3.jpg" alt="porte entr&eacute;e">
      <div class="carousel-caption d-none d-sm-block">
          <h5>Porte d'entr&eacute;</h5>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="contenu/images/ble2.jpg" alt="champ">
      <div class="carousel-caption d-none d-sm-block">
          <h5>Champ de bl&eacute;</h5>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="contenu/images/hiver.jpg" alt="chemin neige">
      <div class="carousel-caption d-none d-sm-block">
          <h5>Chemin en hiver</h5>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="contenu/images/chambord.jpg" alt="chambord">
      <div class="carousel-caption d-none d-sm-block">
          <h5>Chateau de Chambord</h5>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="contenu/images/peniche.jpg" alt="p&eacute;niche">
      <div class="carousel-caption d-none d-sm-block">
          <h5>P&eacute;niche</h5>
      </div>
    </div>
     <div class="carousel-item">
      <img class="d-block w-100" src="contenu/images/roi.jpg" alt="bas-relief">
      <div class="carousel-caption d-none d-sm-block">
          <h5>Bas-relief au ch&acirc;teau de Blois</h5>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="contenu/images/eglise.jpg" alt="basilique Cl&eacute;ry">
      <div class="carousel-caption d-none d-sm-block">
          <h5>Basilique de Cl&eacute;ry</h5>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="contenu/images/chateau.jpg" alt="chateau Sologne">
      <div class="carousel-caption d-none d-sm-block">
          <h5>Ch&acirc;teau en Sologne</h5>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="contenu/images/loiret.jpg" alt="Loiret">
      <div class="carousel-caption d-none d-sm-block">
          <h5>Le Loiret en &eacute;t&eacute;</h5>
      </div>
    </div>
  </div>

  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- Carousel end -->
</div>
</div>


<?php
    $content = ob_get_clean();
    require ('template.php');
    