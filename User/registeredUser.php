<?php
   include_once __DIR__ . '/User.php';

   class RegisteredUser extends User {
      private $userName;
      private $password;
      private $cardDetails;
      private $discount = 20;

   }
?>