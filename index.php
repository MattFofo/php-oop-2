<?php

   include_once __DIR__ . '/Product/Product.php';
   include_once __DIR__ . '/User/User.php';

   $obj1 = new Food('delux', 18.90);

   $obj2 = new Toy('toyname', 12.50);

   var_dump($obj1, $obj2)
?>