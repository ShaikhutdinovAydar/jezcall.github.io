<?php

 include_once ROOT. '/models/News.php';

 
  class NewsController {

    public function actionView($id) 
    {
      $ItemNews = array();
      $ItemNews = News::getNewsItemById($id);
      require_once(ROOT.'/views/news/view.php');
      return true;
    }
  }
?>