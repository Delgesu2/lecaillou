<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="Description" content="Chambres d'hôtes et gîte, Lieu: Cléry-Saint-André, Organisme: Gîtes de France, Tarifs: 49€ - 56€">
    <meta property="og:title" content="Chambres d'hôtes Le Caillou à Cléry-Saint-André">
    <meta property="og:description" content="Chambres d'hôtes Gîtes de France à Cléry-Saint-André, dans le Loiret">
    <meta property="og:url" content="http://www.lecaillou.net/">
    <meta property="og:site_name" content="Chambres d'hôtes Le Caillou">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link rel="icon" type="image/png" href="contenu/images/icones/LOGO_GDF2.png" />

    <!-- Bootstrap 4 CSS -->
    <link rel="stylesheet" type="text/css" href="contenu/CSS/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Style sheet -->
    <link rel="stylesheet" type="text/css" href="contenu/CSS/style.css">

     <title><?= $title ?></title>
     <script src='https://www.google.com/recaptcha/api.js' async defer></script>
     <script>
       function onSubmit(token) {
         document.getElementById("contact").submit();
       }
     </script>

  </head>

  <body>

  <!-- Navbar -->
<nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/">
    <img src="contenu/images/icones/LOGO_GDF2.png" width="40" height="40" class="d-inline-block align-top" alt="">
    <span class="marque"> Le Caillou</span>
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" data-target="#navbarText" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav" id="navbarText">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="/rooms">Chambres</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/contact">Contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/photos">Photos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/infos">Informations</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/blog">Blog</a>
      </li>      
    </ul>
  </div>
</nav>
<!-- End navbar -->
<?= $content ?>
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script type="text/javascript" src="contenu/JS/jquery-3.3.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    
    <script type="text/javascript" src="contenu/JS/bootstrap.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>