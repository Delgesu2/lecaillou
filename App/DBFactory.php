<?php
/**
 * Created by PhpStorm.
 * User: ronsard
 * Date: 29/06/19
 * Time: 00:36
 */

namespace App;

abstract class DBFactory
{
    protected function connect()
    {
        //Read data array
        $data = require __DIR__ . './../config/connect.php';


        try {
            return new \PDO('mysql:host=' . $data['host'] . ';dbname=' . $data['dbname'] . ';charset=utf8',
                $data['username'], $data['password'],
                array(\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION));

        }

        catch(\PDOException $ex){
            die('Erreur : ' . $ex->getMessage());
        }
    }

}