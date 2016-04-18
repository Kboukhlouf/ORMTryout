<?php

/**
 * Created by PhpStorm.
 * User: ELITE
 * Date: 26/03/2016
 * Time: 13:49
 */

require_once('Mapper.php');

class Person extends Mapper
{
    private $personId;
    private $name;
    private $email;

    static $object = 'Person';
    static $id = 'personId';
    static $f1 = 'name';
    static $f2 = 'email';

    public function __construct($_personId,$_name,$_email)
    {
        $this->personId=$_personId;
        $this->name=$_name;
        $this->email=$_email;
        $this->data = array($this->personId,$this->name,$this->email);
        self::$config = array(self::$id,self::$f1,self::$f2);
        parent::__construct();
    }


    public function __get($att)
    {
        return $this->$att;
    }

    public function __set($name, $value)
    {
        $this->$name=$value;
    }

    public function __toString()
    {
        return 'Person ID : ' . $this->personId . ', Name : ' . $this->name . ', Email : ' . $this->email;
    }

}
