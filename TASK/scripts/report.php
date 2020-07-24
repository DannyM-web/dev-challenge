<?php

//TODO print formatted report

require_once('../models/Customer.php');
require_once('../models/CurrencyConverter.php');

//
$customers = new Customer;
$converter = new CurrencyConverter(new CurrencyWebservice);
//Generate a transactions history of customer by ID given as random number from 1 to 3
  // 3 is the case where no id was found
$transactions = $customers->getTransactions(rand(1,3));

//check if transaction return true , print values
if ( count($transactions) ) {
  foreach ($transactions as $transaction) {
    echo 'ID Client: ' . $transaction['id'] . '<br>'
    . 'Date of transaction: ' . $transaction['date'] . '<br>'
    . 'Value: ' . $converter -> convert($transaction['value']) . '<br> ------------- <br>'
    ;
  }
  //case no id found
}else{
  echo 'No clients found with given ID';
}
