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

    $person1 = new Person(20,"Kokou","kaka@gmail.com");
    $person1->save("Person");

    foreach(Person::getAllElements("Person") as $element){
        echo print_r($element);
        echo '</br>';
    }
