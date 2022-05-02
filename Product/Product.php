<?php

abstract class Product {
   protected $name;
   protected $price;
   private $animalType;
   private $description;
   private $thumb;

   /**
    * Get the value of name
    */ 
   public function getName()
   {
      return $this->name;
   }

   /**
    * Set the value of name
    *
    * @return  self
    */ 
   public function setName($name)
   {
      $this->name = $name;

      return $this;
   }

   /**
    * Get the value of price
    */ 
   public function getPrice()
   {
      return $this->price;
   }

   /**
    * Set the value of price
    *
    * @return  self
    */ 
   public function setPrice($price)
   {
      $this->price = $price;

      return $this;
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

   /**
    * Get the value of thumb
    */ 
   public function getThumb()
   {
      return $this->thumb;
   }

   /**
    * Set the value of thumb
    *
    * @return  self
    */ 
   public function setThumb($thumb)
   {
      $this->thumb = $thumb;

      return $this;
   }
}

?>