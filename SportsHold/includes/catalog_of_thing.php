<?php 
require 'db.php';
$count_of_content = mysqli_query($connection, "SELECT COUNT(*) FROM `sneakers_department`");
$res = mysqli_fetch_assoc($count_of_content);
$content = mysqli_query($connection, "SELECT * FROM `sneakers_department`");
if (!$content) {
  die(mysqli_error($connection)); 
}

if (!$count_of_content) {
  die(mysqli_error($connection)); 
}
$count = 0;
while(  $result = mysqli_fetch_assoc($content)  )
{
  $count++;
  if ($count > $res['COUNT(*)'] - 24){
      if ($result['sale'] == '') 
    {
      echo '<div class="features-block col-md-3 col-sm-6 col-xs-6">
            <div class="content">
              <p>
                ' . $result['price'] . '<br><strong>' .$result['price_sale'] . '</strong>
              </p>
              <img style="border-radius: 7px" src="../media/img/fixed-carousel/'  . $result['images'] . '" alt="" class="dd">
              <h3>
              <small style="font-size: 100%">' . $result['sex'] . '</small><br>
                <strong>' . $result['name'] . '</strong><br>
                <i>#' . $result['id'] . '</i>
              </h3>
            </div>
        </div>';
    }


    else 
    {
      echo '<div class="features-block col-md-3 col-sm-6 col-xs-6 first">
            <div class="content">
              <p>
                ' . $result['price'] . '<br><strong>' .$result['price_sale'] . '</strong>
              </p>
              <span>' . $result['sale'] . '</span><img style="border-radius: 7px" src="../media/img/fixed-carousel/'  . $result['images'] . '" alt="" class="dd">
              <h3>
              <small style="font-size: 100%">' . $result['sex'] . '</small><br>
                <strong>' . $result['name'] . '</strong><br>
                <i>#' . $result['id'] . '</i>
                <h2 style="display:none;">' . $result['description'] . '</h2>
              </h3>
            </div>
        </div>';
    }
  }
  
    
}
?>