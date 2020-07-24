<?php

/**
 * Dummy web service returning random exchange rates
 *
 */
class CurrencyWebservice
{
    /**
     * @todo return random value here for basic currencies like GBP USD EUR (simulates real API)
     *
     */
     private $currencies = [
       "€" => 1,
       "$" => 0.86,
       '£' => 1.10
     ];

    public function getExchangeRate($currency)
    {
      if (array_key_exists($currency, $this->currencies)) {
      return $this->currencies[$currency];
      } else {
      return false;
      }
    }
}
