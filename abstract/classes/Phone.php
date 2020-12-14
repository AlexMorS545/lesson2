<?php
spl_autoload_register(function ($className){
  include_once "classes/$className.php";
});

class Phone extends Product {

  private $priceWithMarkup = 0;
  private $priceProduct;

  public function __construct($name, $price, $percent, $count) {
    $this->priceProduct = $price;
    parent::__construct($name, $price, $percent, $count);
  }

  public function getPriceProduct($price) {
    return $this->priceProduct = $price / 2;
  }

  public function getPriceWithMarkup() {
    return $this->priceWithMarkup;
  }

  public function getAllPrice($price, $percent, $count) {

    $this->priceWithMarkup = ($this->getPriceProduct($price) / 100 * $percent) + $this->getPriceProduct($price);
    $sum = $this->getPriceWithMarkup() * (int)$count;

    return round($sum,2);
  }

  function getPriceMarkup($price, $count) {

    $sumProfit = ($this->getPriceWithMarkup() - $this->getPriceProduct($price)) * (int)$count;

    return round($sumProfit, 2);
  }
}