<?php

/**
 * Created by PhpStorm.
 * User: ELITE
 * Date: 26/03/2016
 * Time: 13:19
 */
class Connection extends PDO
{
    //Syntaxe PDO Constructor : public PDO::__construct ( string $dsn [, string $username [, string $password [, array $options ]]] )
    //$dsn = 'mysql:dbname=testdb;host=127.0.0.1';
    function __construct($file = 'param.ini')
    {
        if(!$settings=parse_ini_file($file,TRUE)) throw new Exception("Impossible d'ouvrir le fichier : $file .");
        $dsn = $settings['database']['driver'] . ':host=' . $settings['database']['host'] .
            ';port=' . $settings['database']['port'] .
            ';dbname=' . $settings['database']['schema'];
        parent::__construct($dsn,$settings['database']['username'],$settings['database']['password']);
    }

}