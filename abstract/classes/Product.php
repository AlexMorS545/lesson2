<?php
abstract class Product {

  private $name;
  private $price;
  private $percent;

  function __construct($name, $price, $percent, $count) {
    $this->name = $name;
    $this->price = $price;
    $this->percent = $percent;
    $this->count = $count;
  }

  public function getName() {
    return $this->name;
  }

  public function getPrice() {
    return $this->price;
  }

  public function getPercent() {
    return $this->percent;
  }

  public function getCount() {
    return $this->count;
  }

  abstract function getAllPrice($price, $percent, $count);

  abstract function getPriceMarkup($price, $count);

  public function showProduct() {
    echo "Вы продали {$this->getCount()} {$this->getName()} на общую сумму {$this->getAllPrice($this->getPrice(), $this->getPercent(), $this->getCount())} y.e.<br>";
    echo "Ваш доход составил {$this->getPriceMarkup($this->getPrice(), $this->getCount())} y.e.<hr>";
  }
}