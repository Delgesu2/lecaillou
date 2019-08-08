<?php
/**
 * Created by PhpStorm.
 * User: ronsard
 * Date: 29/06/19
 * Time: 15:37
 */

namespace Framework\Manager;
use App\DBFactory;
use Framework\Modele\Message;

class MessageManager extends DBFactory
{
    /**
     * @var array
     */
    public $data;

    /**
     * Return list of messages
     *
     * @return mixed
     */
    public function getMessages()
    {
        $req = $this->connect()->query("SELECT id, author, email, content, DATE_FORMAT(date_insertion, '%d/%m/%Y') AS date_insertion
       FROM message ORDER BY date_insertion DESC");

        while ($res = $req->fetch()){
            $this->data[] = $this->buildDomain($res);
        }
        return $this->data;
    }

    /**
     * Message create
     */
    public function createMessage()
    {
        $req = $this->connect()->prepare("INSERT INTO message(author, email, content, date_insertion)
                                          VALUES (:author, :email, :content, NOW())");

        $req->bindValue(':author', $_POST['author'], \PDO::PARAM_STR);
        $req->bindValue(':email', $_POST['email'], \PDO::PARAM_STR);
        $req->bindValue(':content', $_POST['content'], \PDO::PARAM_STR);

        $req->execute();
    }

    /**
     * Hydrate object
     *
     * @param array $data
     *
     * @return Message
     */
    public function buildDomain(array $data)
    {
        $message = new Message();

        foreach ($data as $key=>$value)
        {
            $method = 'set'.ucfirst($key);

            if (method_exists($message, $method)){
                $message->$method($value);
            }
        }

        return $message;
    }

}