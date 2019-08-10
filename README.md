Vitrine des Chambres d'hôtes Le Caillou
=======================================

*Mise à jour d'août 2019, nouvelle fonctionnalité: livre d'or avec pagination.* 

Ce site est un projet destiné à présenter une petite structure familiale.


Le code est propre, en architecture MVC, et parfait pour un site-vitrine car il n'a pas d'entité (pas de base de données). J'ai choisi de ne pas inclure de répertoire /src dans l'arborescence mais un simple répertoire /Controller qui correspond au namespace du même nom (voir composer.json) . Il renvoie la requête vers la bonne vue. 
Réutilisez librement le routeur. Vous le trouverez dans le répertoire /App. Les 2 fichiers sont Route.php et Router.php. Les routes sont écrites dans le tableau des routes /config/routes.php.  
Ce routeur en **PHP/POO** est minimaliste car il ne gère pas les paramètres (pas besoin -> pas d'entité !) mais il est propre et gère une \Exception de page 404. 

L'application comprend aussi un mailer basé sur **Swiftmailer**, de **SensioLab**. Par défaut, il est réglé sur le port 465 et gère le SSL (ligne 11). 
Pour le faire fonctionner, il vous faudra créer un tableau data.php dans le répertoire /config.Le tableau devra être présenté ainsi:

    <?php

    return [
        'smtp'     => 'serveurenvoi",
        'username' => 'contact@webmestre.com',
        'password' => 'motdepasse',
        'from'     => 'courriel@lesite.com',
        'to'       => 'adresse personnelle'
        ];

Les vues se situent dans le répertoire /template. Elles sont écrites selon la syntaxe Bootstrap 4. Le répertoire /public contiendra un sous-répertoire /contenu pour stocker les images, les polices de caractères et le CSS.

Allez-y, récupérez le code, réutilisez-le, faites le vivre ! Il conviendra parfaitement pour un débutant en PHP/POO.

Voici le site publié: [www.lecaillou.fr](http://www.lecaillou.fr)

Adresse courriel de contact: <contact@devxdemo.eu>

Au revoir !

