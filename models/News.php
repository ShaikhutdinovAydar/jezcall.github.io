<?php

class News {
    public static function getLatestNews(){
    $db = Db::getConnection();
    $sql = 'SELECT * FROM news ORDER BY id DESC LIMIT 3';

    $news = array();
    $result = $db->query($sql);

    $i = 0;
    while ($row = $result->fetch()) {
      $news[$i]['id'] = $row['id'];
      $news[$i]['header'] = $row['header'];
      $news[$i]['img'] = $row['img'];
      $news[$i]['description'] = $row['description'];
      $news[$i]['date'] = $row['date'];
      $i++;
    }
    return $news;
    }

  public static function getNewsItemById($id) {
    $db = Db::getConnection();
    $sql = 'SELECT * FROM news WHERE id = '.$id;
    $result = $db->query($sql);

    $newsItem = array();
    $i = 0;
    while ($row = $result->fetch()) {
      $newsItem[$i]['id'] = $row['id'];
      $newsItem[$i]['header'] = $row['header'];
      $newsItem[$i]['img'] = $row['img'];
      $newsItem[$i]['description'] = $row['description'];
      $newsItem[$i]['date'] = $row['date'];
      $i++;
    }
    return $newsItem;
    }
}



?>