<?php

namespace System;

use PDO;
use Config\App;
/**
* Base model
*
*/
abstract class Model
{
    /**
    * Get the PDO database connection
    *
    * @return mixed
    */
    protected static function getDB()
    {
        static $db = null;
        if ($db === null) {
            $dsn = 'mysql:host=' . App::DB_HOST . ';dbname=' . App::DB_NAME . ';charset=utf8';
            // set the PDO error mode to exception
            $db = new PDO($dsn, App::DB_USER, App::DB_PASSWORD);
            // Throw an Exception when an error occurs
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        return $db;
    }
}