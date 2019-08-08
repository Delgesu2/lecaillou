<?php

if (isset($_POST)) {

require_once '../../vendor/autoload.php';

 // Read data array
		$data = require '../../config/data.php';
        
        // Create the Transport
        $transport = (new Swift_SmtpTransport($data['smtp'], 465, 'ssl'))
            ->setUsername($data['username'])
            ->setPassword($data['password'])
        ;

// Create the Mailer
        $mailer = new Swift_Mailer($transport);

// Create a message
        $contact = 'Message de: ' . htmlspecialchars($_POST['name']) .
            '<p>Adresse courriel: ' . htmlspecialchars($_POST['email']) . '</p>
            <p>Message: ' . htmlspecialchars($_POST['message']) . '</p>';
        $message = (new Swift_Message('Nouveau message'))
            ->setFrom([htmlspecialchars($data['from']) => 'Formulaire contact Le Caillou'])
            ->setTo(htmlspecialchars($data['to']))
            ->setBody($contact, 'text/html');

// Send the message
        $result = $mailer->send($message);

// Redirection
         header('Location:/sent');

     } else {
        echo "Veuillez compléter tous les champs.";
        header('refresh:2;url=/send');
     }

