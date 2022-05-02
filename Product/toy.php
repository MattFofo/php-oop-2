<?php
   include_once __DIR__ . '/Product.php';

   class Toy extends Product {
      private $material;

      public function __construct($_name, float $_price)
      {
         return [
            $this->name = $_name,
            $this->price = $_price,
         ];
      }
      

      /**
       * Get the value of material
       */ 
      public function getMaterial()
      {
            return $this->material;
      }

      /**
       * Set the value of material
       *
       * @return  self
       */ 
      public function setMaterial($material)
      {
            $this->material = $material;

            return $this;
      }
   }
?>