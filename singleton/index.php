<?php

trait queryDB {

  public function getSelect() {

  }
  public function getDelete() {
    echo "удалил";
  }
  public function getUpdate() {

  }
  public function getInsert() {

  }
}

class DB {

  protected static $object;
  static $connect;

  private function __construct() {
  }

  public static function getObject() {
    if (self::$object == null) {
      self::$object = new DB;
    }
    return self::$object;
  }

  use queryDB;
}

DB::getObject()->getDelete();