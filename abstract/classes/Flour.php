<?php
spl_autoload_register(function ($className) {
  include_once "classes/$className.php";
});

class Flour extends Product {

  private $priceWithMarkup = 0;
  private $weightProduct;

  public function __construct($name, $price, $percent, $count) {
    parent::__construct($name, $price, $percent, $count);
  }

  public function getPriceWithMarkup() {
    return $this->priceWithMarkup;
  }

  public function getWeightProduct($count) {
    return $this->weightProduct = round($count, 3);
  }

  public function getAllPrice($price, $percent, $count) {

    $this->priceWithMarkup = ($price / 100 * $percent) + $price;
    $sum = $this->getPriceWithMarkup() * $this->getWeightProduct($count);

    return round($sum,2);
  }

  function getPriceMarkup($price, $count) {

    $sumProfit = ($this->getPriceWithMarkup() - $price) * $this->getWeightProduct($count);

    return round($sumProfit, 2);
  }
}