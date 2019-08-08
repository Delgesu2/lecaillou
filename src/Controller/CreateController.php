<?php
/**
 * Created by PhpStorm.
 * User: ronsard
 * Date: 08/08/19
 * Time: 18:02
 */

namespace Controller;

use Framework\Manager\MessageManager;

/**
 * Class CreateController
 *
 * @package Controller
 */
class CreateController
{
    /**
     * @var MessageManager
     */
    private $manager;

    /**
     * CreateController constructor.
     */
    public function __construct() // Construit l'objet MessageManager
    {
        $this->manager = new MessageManager();
    }

    public function __invoke() // Créer message en base de données
    {
        require_once __DIR__ . '/../../vendor/autoload.php';

        // Read data array
        $data = require __DIR__ . '/../../config/data.php';

        // Create the Transport
        $transport = (new \Swift_SmtpTransport($data['smtp'], 465, 'ssl'))
            ->setUsername($data['username'])
            ->setPassword($data['password'])
        ;

        // Create the Mailer
        $mailer = new \Swift_Mailer($transport);

        // Create a message
        $contact = '<h1>Livre d\'or du site Le Caillou</h1>
            <p>Auteur: ' . htmlspecialchars($_POST['author']) . '</p>
            <p>Adresse courriel: ' . htmlspecialchars($_POST['email']) . '</p>
            <p>Message: ' . htmlspecialchars($_POST['content']) . '</p>';
        $message = (new \Swift_Message('Nouveau message dans le livre d\'or du site Le Caillou'))
            ->setFrom([htmlspecialchars($data['from']) => 'Livre d\'or Le Caillou'])
            ->setTo(htmlspecialchars($data['to']))
            ->setBody($contact, 'text/html');

        // Send the message
        $result = $mailer->send($message);

        // Inscrire le message en BDD puis redirection
        $this->manager->createMessage();
        header('Location:/book');
    }
}