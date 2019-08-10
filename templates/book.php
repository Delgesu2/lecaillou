<?php
declare(strict_types = 1);
$title = "Le Caillou - Livre d'or";
ob_start();
?>


<div class="container">

    <div class="mx-auto marque" style="width: 200px; font-size: 3em">Livre d 'or</div>
    <div>N'hésitez pas à laisser un petit message :o)</div>

    <div class="list-wrapper">
    <!-- Boucle d'affichage des messages -->
<?php

   if (!empty($messages)){
       foreach ($messages as $message){ ?>

           <div class="row list-item">
               <div class="col-sm-12">
                   <div class="card">
                       <div class="card-body">
                           <h6 class="card-title">
                               <div class="row">
                                   <div class="col">
                               De: <?= htmlspecialchars($message->getAuthor()); ?>
                                   </div>
                                   <div class="col">
                                       Date: <?= $message->getDate_insertion(); ?>
                                   </div>
                                   <div class="col">
                                       Adresse: <?= htmlspecialchars($message->getEmail()); ?>
                               </div>
                           </h6>
                            <div> Message: <?= htmlspecialchars($message->getContent()); ?> </div>
                        </div>
                   </div>
               </div>
           </div>

           <?php
       }

   } else
       echo 'Aucun message dans le Livre d\'or'; ?>

   </div>

    <div id="pagination-container"></div>

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

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script type="text/javascript" src="contenu/JS/jquery.simplePagination.js"></script>

<script>

    var items = $(".list-wrapper .list-item");
    var numItems = items.length;
    var perPage = 4;

    items.slice(perPage).hide();

    $('#pagination-container').pagination({
    items: numItems,
    itemsOnPage: perPage,
    prevText: "&laquo;",
    nextText: "&raquo;",
    onPageClick: function(pageNumber) {
        var showFrom = perPage * (pageNumber - 1);
        var showTo = showFrom + perPage;
        items.hide().slice(showFrom, showTo).show();
    }
    });

</script>

<?php
$content = ob_get_clean();
require ('template.php');
