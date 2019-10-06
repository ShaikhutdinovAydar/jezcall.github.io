<?php

class Product 
{
  const SHOW_BY_DEFAULT = 10;

  public static function getLatestProducts($count = self::SHOW_BY_DEFAULT)
  {
    $count = intval($count);
    $db = Db::getConnection();

    $productList = array();

    $result = $db->query('SELECT * FROM `sneakers_department` LIMIT '.$count);
    
    $i = 0;
    while ($row = $result->fetch()) {
      $productList[$i]['id'] = $row['id'];
      $productList[$i]['price'] = $row['price'];
      $productList[$i]['sale'] = $row['sale'];
      $productList[$i]['price_sale'] = $row['price_sale'];
      $productList[$i]['images'] = $row['images'];
      $productList[$i]['sex'] = $row['sex'];
      $productList[$i]['name'] = $row['name'];
      $productList[$i]['description'] = $row['description'];
      $i++;
    }
    return $productList;
  }

  public static function getProductItemById($id) {
    $db = Db::getConnection();

    $productItem = array();

    $result = $db->query('SELECT * FROM `sneakers_department` WHERE `id` = '.$id);
    
    $i = 0;
    while ($row = $result->fetch()) {
      $productItem['id'] = $row['id'];
      $productItem['price'] = $row['price'];
      $productItem['sale'] = $row['sale'];
      $productItem['price_sale'] = $row['price_sale'];
      $productItem['images'] = $row['images'];
      $productItem['sex'] = $row['sex'];
      $productItem['name'] = $row['name'];
      $productItem['description'] = $row['description'];
      $i++;
    }
    return $productItem;
  }
}




?>