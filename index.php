<?php
/**
 * Created by PhpStorm.
 * User: ELITE
 * Date: 26/03/2016
 * Time: 13:58
 */

    require ('Person.php');

    $connect = Mapper::getConnection();
    echo '</br>';

    foreach(Person::getAllElements() as $element){
        echo print_r($element);
        echo '</br>';
    }