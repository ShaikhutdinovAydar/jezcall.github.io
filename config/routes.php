<?php
return array(
  'product/([0-9]+)' => 'product/view/$1',
  'index.php' => 'site/index',

  'user/register' => 'user/register',
  'user/login' => 'user/login',
  'user/logout' => 'user/logout',

  'cabinet/edit' => 'cabinet/edit',
  'cabinet' => 'cabinet/index',
  
  'news/([0-9]+)' => 'news/view/$1',
  '' => 'site/index',
  
);

?>