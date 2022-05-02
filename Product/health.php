<?php
   include_once __DIR__ . '/Product.php';

   class Health extends Product {
      private $expiring;

      public function __construct($_name, float $_price)
      {
         return [
            $this->name = $_name,
            $this->price = $_price,
         ];
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
   }
?>