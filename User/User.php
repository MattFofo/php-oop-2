<?php

   include_once __DIR__ . '/../Order.php';
   class User {
      private $name;
      private $mail;
      private $phone;
      private $address;
      private $cardExpiration;
      protected $discount = 0;

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
      public function getCardExpiration()
      {
            return $this->cardExpiration;
      }

      /**
       * Set the value of cardDetails
       *
       * @return  self
       */ 
      public function setCardExpiration($_cardExpiration)
      {
         if ($_cardExpiration < date("m/Y")) {
            echo '<h1>card expired</h1>';
         } else {
            $this->cardExpiration = $_cardExpiration;
            var_dump($this);
         }

         return $this;
      }

      /**
       * Get the value of address
       */ 
      public function getAddress()
      {
            return $this->address;
      }

      /**
       * Set the value of address
       *
       * @return  self
       */ 
      public function setAddress($address)
      {
            $this->address = $address;

            return $this;
      }

      public function setOrder(CreditCard $_creditCard, $_productList)
      {
         $order = new Order($this, $_creditCard, $_productList);

         return $order;
      }
   }

   $card = new User;

   $card->setCardExpiration("5/2050")

?>