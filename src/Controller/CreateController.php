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
        $this->manager->createMessage();
        header('Location:/book');
    }
}