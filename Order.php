<?php
   class Order {
      protected $productsList = [];
      protected $user;
      protected $creditCard;

      public function __construct($productsList, $user, $creditCard)
      {
         $this->productsList = $productsList;
         $this->user = $user;
         $this->creditCard = $creditCard;
      }
   }
?>