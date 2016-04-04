<?php

/**
 * Created by PhpStorm.
 * User: ELITE
 * Date: 26/03/2016
 * Time: 14:07
 */

require ('Connection.php');

abstract class Mapper
{
    protected $paramfile = 'param.ini';
    static protected $db;
    static protected $schema;
    static protected $object;
    static protected $connect;
    protected $data;
    static protected $config;

    public function __construct($file = 'param.ini')
    {
        if (!$db = parse_ini_file($file, TRUE)) throw new Exception("Impossible to parse the ini file!");
        self::$schema = $db['database']['schema'];
        if(!self::$connect) {
            try{
                self::$connect = new Connection();
                self::$connect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            }
            catch(PDOException $e){
                echo 'PDO::errorInfo()';
                die(print_r(self::$connect->errorInfo()));
            }
        }
    }

    static public function getConnection(){
        if(!self::$connect){
            try{
                self::$connect = new Connection();
                self::$connect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            }
            catch(PDOException $e){
                echo 'PDO::errorInfo()';
                die(print_r(self::$connect->errorInfo()));
            }
        }
        return self::$connect;
    }

    static public function getElementsById($object,$id){
        try{
            $query = 'SELECT * FROM ' . $object . ' WHERE ' . self::$config['0'] . ' = :id';
            $result = self::$connect->prepare($query);
            $result->bindValue(':id',$id,PDO::PARAM_INT);
            $result->execute();
        }catch (PDOException $e){
            die(print_r($e->getMessage()));
        }
        while ($line = $result->fetch()){
            echo print_r($line);
        }
    }

    static public function getAllElements(){
        $query = 'SELECT * FROM ' . self::$object . ';';
        $result = self::$connect->query($query);
        if(!$result){
            echo 'PDO::errorInfo()';
            die(print_r(self::$connect->errorInfo()));
        }
        return $result->fetchAll();
    }

    public function save()
    {
        $id = $this->data['0'];
        $fieldsarray = array_map(array(__CLASS__,'strangeQuote'),self::$config);
        $valuesarray = array_map(array(__CLASS__,'quote'),$this->data);
        $fields = implode(' ,',$fieldsarray);
        $values = implode(' ,',$valuesarray);
        $query = 'INSERT INTO '. self::$object . ' ( '. $fields . ') VALUES (' . $values . ');';
        $result = self::$connect->exec($query);
        if(!$result){
        echo 'PDO::errorInfo()';
        die(print_r(self::$connect->errorInfo()));
        }
        echo $id;
        return $id;
    }

    static public function quote($value){
        if ($value === null) {
            $value = 'NULL';
        }
        else if (!is_numeric($value)) {
            $value = "'" . $value . "'";
        }
        return $value;
    }

    static public function strangeQuote($value){
        $value = "`" . $value . "`";
    return $value;
    }
}