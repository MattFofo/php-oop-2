<?php
   include_once __DIR__ . '/Product.php';

   class Toy extends Product {
      private $animalType;
      private $expiring;
      private $description;

      public function __construct($_name, float $_price)
      {
         return [
            $this->name = $_name,
            $this->price = $_price,
         ];
      }
   }
?>