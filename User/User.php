<?php 
   class User {
      private $name;
      private $mail;
      private $phone;
      private $cardDetails;
      private $discount = 0;

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
       * Get the value of mail
       */ 
      public function getMail()
      {
            return $this->mail;
      }

      /**
       * Set the value of mail
       *
       * @return  self
       */ 
      public function setMail($mail)
      {
            $this->mail = $mail;

            return $this;
      }

      /**
       * Get the value of phone
       */ 
      public function getPhone()
      {
            return $this->phone;
      }

      /**
       * Set the value of phone
       *
       * @return  self
       */ 
      public function setPhone($phone)
      {
            $this->phone = $phone;

            return $this;
      }

      /**
       * Get the value of discount
       */ 
      public function getDiscount()
      {
            return $this->discount;
      }

      /**
       * Set the value of discount
       *
       * @return  self
       */ 
      public function setDiscount($discount)
      {
            $this->discount = $discount;

            return $this;
      }

      /**
       * Get the value of cardDetails
       */ 
      public function getCardDetails()
      {
            return $this->cardDetails;
      }

      /**
       * Set the value of cardDetails
       *
       * @return  self
       */ 
      public function setCardDetails($_cardDetails)
      {
         if ($_cardDetails < date("m/Y")) {
            echo '<h1>card expired</h1>';
         } else {
            $this->cardDetails = $_cardDetails;
            var_dump($this);
         }

            return $this;
      }
   }

   $card = new User;

   $card->setCardDetails("5/2050")
?>