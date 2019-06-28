<?php
$title = "Le Caillou - Accueil";
ob_start();
?>

  <div class="container-fluid">

      <!-- Parallaxe -->
    <div class="row">
      <div class="col-12 paral paralsec">
        <h1 class="display-3">Sur la route des vacances</h1>
        <p class="lead">pr&egrave;s des ch&acirc;teaux de la Loire</p>
        <p class="lead">entre le fleuve et la Sologne,<br/>posez vos bagages pour partager un moment de convivialit&eacute;  
        </p>
      </div>
    </div>
      <div class="row">
        <div class="col-12">
           <h2 class="landtitle">Chambres d'h&ocirc;tes à Cl&eacute;ry-Saint-Andr&eacute;</h2>
           <div class="sub-title">Agr&eacute;&eacute;es <a href="https://www.gites-de-france-loiret.com/fr/"> G&icirc;tes de France&reg;</a></div>
        </div>
      </div>

      <div class="row">
        <div class="col-12">
          <div class="card bando d-sm-none ">
            <div class="card-body">
              <h5 class="card-title">Contacter les propriétaires</h5>
              <p class="card-text">Monique et Pierre Coutant</p>  
              <a href="tel:+33238457481" class="btn btn-danger btn-lg btn btn-block appel" role="button" aria-pressed="true">Appeler</a>  
            </div>  
          </div>            
        </div>      
      </div>

      <div class="row">
        <div class="col-12">
          <div class="sub-title">Deux chambres et un gîte<br>
                  A partir de 49 € - petit-déjeuner inclus</div>
        </div>
      </div>

    
      <div class="card-deck">
      
        <div class="card">
          <a href="/rooms"><img class="card-img-top img-fluid" src="contenu/images/pomme.jpg" alt="chambre Pomme d'Api" title="chambre Pomme d'Api"></a>
          <div class="card-body">
            <h5 class="card-title">Chambre Pomme d'Api</h5>
            <p class="card-text">1 grand lit, salle de bain indépendante</p>
          </div>                
        </div>
      
        <div class="card">
          <a href="/rooms"><img class="card-img-top" src="contenu/images/cerise.jpg" alt="chambre Cerise" title="chambre Cerise"></a>
          <div class="card-body">
            <h5 class="card-title">Chambre Cerise</h5>
            <p class="card-text">2 ou 3 lits individuels, salle de bain indépendante</p> 
          </div>              
        </div>
      
        <div class="card">
          <a href="/rooms"><img class="card-img-top" src="contenu/images/jardin.jpg" alt="gîte" title="Gîte"></a>
          <div class="card-body">
            <h5 class="card-title">Gîte</h5>
            <p class="card-text">Location à la semaine</p>          
          </div>        
        </div>

      </div>
  

    </div>

<?php
    $content = ob_get_clean();
    require ('template.php');
    