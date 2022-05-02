<?php
   include_once __DIR__ . '/Product.php';

   class Food extends Product {
      private $weight;
      private $expiring;
      private $noGlucosio;

      public function __construct(string $_name, float $_price, int $weight)
      {
         return [
            $this->name = $_name,
            $this->price = $_price,
         ];
      }


      /**
       * Get the value of weight
       */ 
      public function getWeight()
      {
            return $this->weight;
      }

      /**
       * Set the value of weight
       *
       * @return  self
       */ 
      public function setWeight($weight)
      {
            $this->weight = $weight;

            return $this;
      }

      /**
       * Get the value of expiring
       */ 
      public function getExpiring()
      {
            return $this->expiring;
      }

      /**
       * Set the value of expiring
       *
       * @return  self
       */ 
      public function setExpiring($expiring)
      {
            $this->expiring = $expiring;

            return $this;
      }

      /**
       * Get the value of noGlucosio
       */ 
      public function getNoGlucosio()
      {
            return $this->noGlucosio;
      }

      /**
       * Set the value of noGlucosio
       *
       * @return  self
       */ 
      public function setNoGlucosio($noGlucosio)
      {
            $this->noGlucosio = $noGlucosio;

            return $this;
      }
   }

   $obj = new Food('deluxeFoody', 24.80, 15); 
   $obj->setPrice(22);
   var_dump($obj)
?>