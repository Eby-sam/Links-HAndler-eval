<?php

namespace eby\Model;

require_once '../vendor/autoload.php';


use RedBeanPHP\R;

class database {

    private static ?PDO $pdo = null;
    private static string $dsn = "mysql:host=%s;dbname=%s;charset=%s";

    /**
     * database connection with a PDO Object
     * @return PDO|null
     */
    public static function DataConnect():?PDO {
        if (self::$pdo === null) {
            try {
                R::setup('mysql:host=localhost;dbname=linkshandler','root','');
            }
            catch (PDOException $e) {
                die();
            }
        }
        return self::$pdo;
    }

}






