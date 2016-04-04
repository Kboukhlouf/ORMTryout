<?php

/**
 * Created by PhpStorm.
 * User: ELITE
 * Date: 27/03/2016
 * Time: 00:23
 */

require_once('Mapper.php');

class Book extends Mapper
{
    private $bookId;
    private $title;
    private $author;
    private $year;

    static private $id = 'bookId';
    static private $f1 = 'title';
    static private $f2 = 'author';
    static private $f3 = 'year';


    public function __construct($_bookid,$_title,$_author,$_year)
    {
        $this->bookId=$_bookid;
        $this->title=$_title;
        $this->author=$_author;
        $this->year=$_year;
        $this->data=array($this->bookId,$this->title,$this->author,$this->year);
        self::$config=array(self::$id,self::$f1,self::$f2,self::$f3);
        parent::__construct();
    }

    public function __get($name)
    {
        return $this->$name;
    }

    public function __set($name, $value)
    {
        $this->$name=$value;
    }

    public function __toString()
    {
        return 'Book ID : ' . $this->bookId .', Title : ' . $this->title . ', Author : ' . $this->author . ', Year : ' . $this->year;
    }

}