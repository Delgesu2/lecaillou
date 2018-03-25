<?php
$title = "Le Caillou - Chambres";
ob_start();
?>

<div class="container-fluid">
	<div class="row">
		<div class="col-12 col-sm-6">
			<img src="contenu/images/pomme.jpg" class="img-fluid" alt="pomme d'api" title="chambre Pomme d'Api">
		</div>
		<div class="col-12 col-sm-6">
			<div class="card">
		  		<div class="card-body">
		    	<h5 class="card-title">Chambre Pomme d'Api</h5>
		    	<h6 class="card-subtitle mb-2 text-muted">1 ou 2 personnes</h6>
		    	<p class="card-text">
		    	Un grand lit (190 X 140), une armoire-penderie, une commode, un bureau, un fauteuil, un pose-valise et deux tables de nuit avec une radio.</p>
		    	<ul class="list-group list-group-flush">
			  		<li class="list-group-item active">Tarifs</li>
			  		<li class="list-group-item">1 personne: 49 €</li>
			  		<li class="list-group-item">2 personnes: 56 €</li>
			  		<li class="list-group-item">Petit-déjeuner inclus</li>
				</ul>
		  		</div>
			</div>		
		</div>
	</div>

	<div class="row">
		<div class="col-12 col-sm-6">
			<img src="contenu/images/cerise.jpg" class="img-fluid" alt="chambre cerise" title="chambre Cerise">
		</div>
		<div class="col-12 col-sm-6">
			<div class="card">
		  		<div class="card-body">
		    	<h5 class="card-title">Chambre Cerise</h5>
		    	<h6 class="card-subtitle mb-2 text-muted">Jusqu'à 3 personnes</h6>
		    	<p class="card-text">Deux lits jumeaux (190 X 090), avec un lit gigogne pour enfant ou adolescent, une armoire avec penderie, une table murale, un récepteur radio, un pose-valise et un fauteuil.</p>
		    	<ul class="list-group list-group-flush">
			  		<li class="list-group-item active">Tarifs</li>
			  		<li class="list-group-item">1 personne: 49 €</li>
			  		<li class="list-group-item">2 personnes: 56 €</li>
			  		<li class="list-group-item">Personne supplémentaire: 15 €</li>
			  		<li class="list-group-item">Petit-déjeuner inclus</li>
				</ul>
		  		</div>
			</div>		
		</div>
	</div>

	<div class="row">
		<div class="col-12">
		<p class="text-justify"> Chambres agréées <em>Gîte de France</em> : elles sont donc équipées chacune d'une salle de bain et de toilettes. Elles se situent à l'étage de la maison des propriétaires, une ancienne maison paysanne.</p>

        <p class="text-justify">Au rez-de-chaussée, une salle commune équipée d'une kitchenette et d'un téléviseur à votre disposition, dans laquelle il vous est possible de préparer des repas légers.</p>

        <p class="text-justify">L'été, vous profiterez d'une terrasse ombragée. Sur demande, un ordinateur portable peut vous être prêté. Vous pourrez garer votre véhicule sur le <mark>parking privé</mark> (fermé sur demande).</p>
        </div>	
	</div>

	<div class="row">
		<div class="col-12 col-sm-6">
			<img src="contenu/images/jardin.jpg" class="img-fluid" alt="gîte" title="Gîte">
		</div>
		<div class="col-12 col-sm-6">
			<div class="card">
		  		<div class="card-body">
		    	<h5 class="card-title">Gîte</h5>
		    	<h6 class="card-subtitle mb-2 text-muted">Location à la semaine</h6>
		    	<p class="card-text">Situé en face de la maison des propriétaires</p>
		    	<p class="card-text">Petite cour privative et fermée</p>
		    	<p class="card-text">Rez-de-chaussée: cuisine, salle d'eau, WC</p>
		    	<p class="card-text">Etage: mezzanine, salon chambre familiale, 2 lits de 90 cm et 1 lit de 140 cm</p>
		    	<p class="card-text">Draps fournis</p>
		    	<p class="card-text">Chauffage électrique avec compteur indépendant</p>
		    	<ul class="list-group list-group-flush">
			  		<li class="list-group-item active">Tarifs</li>
			  		<li class="list-group-item">Entre 190 € et 250 € selon saison</li>
				</ul>
		  		</div>
			</div>		
		</div>
	</div>
</div>

 
<?php
    $content = ob_get_clean();
    require ('template.php');