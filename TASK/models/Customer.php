<?php

class Customer
{
  private $customers;

  // getting the db from the server folder
  public function __construct(){
    require_once('../server/db.php');
    $this -> customers = $dB;
  }

    // Get all the transaction of the client by ID
    public function getTransactions($id)
    {
      //Check if the id is set or is a number
      if(!isset($id) || !is_int($id)) {
      echo "Invalid Argument <br>";
      echo "Please insert integer";
      exit;
      }
      $toGet = [];

      //loop of the db and pushing into an empty array the customers with  the corresponding id
      foreach ($this -> customers as $customer) {
        switch ($customer['id']) {
          case $id:
            $toGet[] = $customer;
            break;
          default:
            continue;
            break;
        }
      }
      return $toGet;
    }
}
