<?php
spl_autoload_register(function ($className){
  include_once "classes/$className.php";
});

class Car extends Product {

  private $priceWithMarkup = 0;

  public function __construct($name, $price, $percent, $count) {
    parent::__construct($name, $price, $percent, $count);
  }

  public function getPriceWithMarkup() {
    return $this->priceWithMarkup;
  }

  public function getAllPrice($price, $percent, $count) {

    $this->priceWithMarkup = ($price / 100 * $percent) + $price;
    $sum = $this->getPriceWithMarkup() * (int)$count;

    return round($sum,2);
  }

  function getPriceMarkup($price, $count) {

    $sumProfit = ($this->getPriceWithMarkup() - $price) * (int)$count;

    return round($sumProfit, 2);
  }
}