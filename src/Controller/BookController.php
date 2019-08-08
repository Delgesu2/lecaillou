<?php
/**
 * Created by PhpStorm.
 * User: ronsard
 * Date: 28/06/19
 * Time: 18:20
 */

namespace Controller;

use Framework\Manager\MessageManager;

/**
 * Class BookController
 *
 * @package Controller
 */
class BookController
{
    /**
     * @var MessageManager
     */
    private $manager;

    /**
     * BookController constructor.
     */
    public function __construct()  // Construit l'objet MessageManager
    {
        $this->manager = new MessageManager();
    }

    /**
     *
     */
    public function __invoke()  // Affiche la liste des messages
    {
        $messages = $this->manager->getMessages();
        require __DIR__ . './../../templates/book.php';
    }

}