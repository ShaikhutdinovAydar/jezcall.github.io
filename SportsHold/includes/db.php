<?php

$connection = mysqli_connect(
  '127.0.0.1',
  'mysql',
  'mysql',
  'sportshold'

);
if ( $connection == false) 
{
  echo 'Failed to connect to database';
  echo mysqli_connect_error();
  exit();
}