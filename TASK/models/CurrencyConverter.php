<?php

require_once('CurrencyWebservice.php');

class CurrencyConverter
{
  private $webService;

  // dependency injection of CurrencyWebservice
  public function __construct(CurrencyWebservice $currencyWebService )
  {
    $this -> webService = $currencyWebService;
  }

// get an amount as argument and convert it, according to the exchange rate of the simulated api
  public function convert($amount)
  {
    //extract the currency
    if ( (strpos($amount,'€') !== false) ) {
      $currency = substr($amount,0,3);
      $amount = substr($amount,3);

    } elseif ((strpos($amount,'£') !== false)) {
      $currency = substr($amount,0,2);
      $amount = substr($amount,2);

    }else {
      $currency = substr($amount,0,1);
      $amount = substr($amount,1);
    }

    //get the rate by currency extracted
    $exchangeRate = $this -> webService -> getExchangeRate($currency);
    // var_dump($exchangeRate);

    // return the value of the conversion in euros
    $response = $exchangeRate * $amount;
    // var_dump($response);
    return round($response,2);
  }
}
