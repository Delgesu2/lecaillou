<?php
ob_start();
$title = "Le Caillou - Contact";
?><div class="container-fluid">
 	<div class="row">
 		<div class="card col-12 col-sm-4">
 			<div class="card-body">
 				<h4 class="card-title landtitle">Chambres d'h&ocirc;tes Le Caillou</h4>
 				<address>

 					<h5><img src="contenu/images/icones/home.svg"> Monique et Pierre Coutant</h5>
 					      78 rue de Saint-André</br>
 					      45370 Cléry-Saint-André              
 				</address>
        <p><img src="contenu/images/icones/device-mobile.svg"> 06 78 66 59 69 / 02 38 45 74 81<br>
           <img src="contenu/images/icones/mention.svg"> 
           <a href="mailto:contact@lecaillou.fr">contact@lecaillou.fr</a></p> 				
 			</div> 			
 		</div>
 		<div class="col-12 col-sm-8">

 			<form action="/send" method="POST">

 			  <div class="form-group">
			    <label for="nom">Votre nom</label>
			    <input type="text" class="form-control" id="name" name="name" required/>
			  </div>

			  <div class="form-group">
			    <label for="email">Votre adresse électronique</label>	    
			    <input type="email" class="form-control" id="email" name="email" placeholder="@" required/>
			  </div>		

			  <div class="form-group">
			    <label for="message">Ecrivez votre message</label>
			    <textarea type="textarea" id="message" name="message" rows="3" class="form-control" required/></textarea>
			  </div>

			  <div class="g-recaptcha" data-sitekey="6LdbA08UAAAAAKcLYTQgnI2swazilKFUDj6S5QmJ"></div>

			  <button type="submit" class="btn btn-primary">Envoyer</button>

			</form>
 			
 		</div>
 	</div>

 	<div class="row">
 		<div class="col-12">
 			<div class="embed-responsive embed-responsive-4by3">
												 <iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://www.openstreetmap.org/export/embed.html?bbox=1.739659309387207%2C47.82154040807026%2C1.7874240875244143%2C47.83951795789679&amp;layer=mapnik&amp;marker=47.83052996142948%2C1.7635631561279297" style="border: 1px solid black"></iframe><br/><small><a href="http://www.openstreetmap.org/?mlat=47.8305&amp;mlon=1.7636#map=15/47.8305/1.7635&amp;layers=NG">Afficher une carte plus grande</a></small>
			</div>
 		</div>
 	</div>
</div> 
<?php
    $content = ob_get_clean();
    require ('template.php');
?>
  