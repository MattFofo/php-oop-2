<?php
   include_once __DIR__ . '/User.php';

   class RegisteredUser extends User {
      private $userName;
      private $password;
      protected $discount = 20;

      /**
       * Get the value of userName
       */ 
      public function getUserName()
      {
            return $this->userName;
      }

      /**
       * Set the value of userName
       *
       * @return  self
       */ 
      public function setUserName($userName)
      {
            $this->userName = $userName;

            return $this;
      }

      /**
       * Get the value of password
       */ 
      public function getPassword()
      {
            return $this->password;
      }

      /**
       * Set the value of password
       *
       * @return  self
       */ 
      public function setPassword($password)
      {
            $this->password = $password;

            return $this;
      }
   }
?>