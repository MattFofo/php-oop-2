<?php
   include_once __DIR__ . '/Product.php';

   class Home extends Product {
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

      /**
       * Get the value of animalType
       */ 
      public function getAnimalType()
      {
            return $this->animalType;
      }

      /**
       * Set the value of animalType
       *
       * @return  self
       */ 
      public function setAnimalType($animalType)
      {
            $this->animalType = $animalType;

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
       * Get the value of description
       */ 
      public function getDescription()
      {
            return $this->description;
      }

      /**
       * Set the value of description
       *
       * @return  self
       */ 
      public function setDescription($description)
      {
            $this->description = $description;

            return $this;
      }
   }
?>