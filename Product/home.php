<?php
   include_once __DIR__ . '/Product.php';

   class Home extends Product {
      private $dimensions;

      public function __construct($_name, float $_price)
      {
         return [
            $this->name = $_name,
            $this->price = $_price,
         ];
      }


      /**
       * Get the value of dimensions
       */ 
      public function getDimensions()
      {
            return $this->dimensions;
      }

      /**
       * Set the value of dimensions
       *
       * @return  self
       */ 
      public function setDimensions($dimensions)
      {
            $this->dimensions = $dimensions;

            return $this;
      }
   }
?>