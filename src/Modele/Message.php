<?php
/**
 * Created by PhpStorm.
 * User: ronsard
 * Date: 29/06/19
 * Time: 15:11
 */

namespace Framework\Modele;

class Message
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $author;

    /**
     * @var string
     */
    public $email;

    /**
     * @var string
     */
    public $content;

    /**
     * @var \DateTime
     */
    public $date_insertion;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getAuthor(): string
    {
        return $this->author;
    }

    /**
     * @param string $author
     */
    public function setAuthor(string $author): void
    {
        $this->author = $author;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * @param string $content
     */
    public function setContent(string $content): void
    {
        $this->content = $content;
    }

    /**
     * @return
     */
    public function getDate_insertion()
    {
        return $this->date_insertion;
    }

    /**
     * @param $date_insertion
     */
    public function setDate_insertion($date_insertion)
    {
        $this->date_insertion = $date_insertion;
    }

}