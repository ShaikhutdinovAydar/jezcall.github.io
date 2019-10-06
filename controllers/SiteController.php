<?php

include_once ROOT. '/models/Product.php';
include_once ROOT.'/models/News.php';


class SiteController {
  public function actionIndex() {
    $latestProduct = array();
    $latestProduct = Product::getLatestProducts(16);
    
    $latestNews = array();
    $latestNews = News::getLatestNews();
    require_once(ROOT.'/views/site/index.php');
    return true;
  }



  public function actionLogin() {

    
    require_once(ROOT.'/views/includes/login.php');
    return true;

  }

}
?>