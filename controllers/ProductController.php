<?php

 include_once ROOT. '/models/Product.php';

 
  class ProductController {

    public function actionView($id) 
    {
      $ItemProduct = array();
      $ItemProduct = Product::getProductItemById($id);
      require_once(ROOT.'/views/product/view.php');
      return true;
    }
  }
?>