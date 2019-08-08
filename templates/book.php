<?php
declare(strict_types = 1);
$title = "Le Caillou - Livre d'or";
ob_start();
?>

<div class="container">

    <div class="mx-auto marque" style="width: 200px; font-size: 3em">Livre d 'or</div>
    <div>N'hésitez pas à laisser un petit message :o)</div>

    <!-- Boucle d'affichage des messages -->
<?php
   if (!empty($messages)){
       foreach ($messages as $message){ ?>

           <div class="row">
               <div class="col-sm-12">
                   <div class="card">
                       <div class="card-body">
                           <h5 class="card-title">
                               <span>De: <?= htmlspecialchars($message->getAuthor()); ?> </span>
                               <span class="mx-5">Date: <?= $message->getDate_insertion(); ?> </span>
                               <span class="mx-5">Adresse: <?= htmlspecialchars($message->getEmail()); ?> </span>
                           </h5>
                            <div> Message: <?= htmlspecialchars($message->getContent()); ?> </div>
                        </div>
                   </div>
               </div>
           </div>

           <?php
       }

   } else
       echo 'Aucun message dans le Livre d\'or';

?>

<div class="row formulaire">
    <div class="col-sm-12">
        <form method="POST" action="/create">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="author">Votre nom:</label>
                    <input type="text" class="form-control" id="author" name="author" required/>
                </div>
                <div class="form-group col-md-6">
                    <label for="email">Votre adresse courriel:</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="@" required/>
                </div>
            </div>

            <label for="content">Votre message:</label>
            <textarea type="textarea" class="form-control" id="content" name="content" rows="3" required/></textarea>

            <button type="submit" class="btn btn-primary">Valider</button>
        </form>
    </div>
</div>

</div>

<?php
$content = ob_get_clean();
require ('template.php');
