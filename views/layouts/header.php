<?php require_once(ROOT . '/models/User.php');?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>SportsHold</title>
  <!-- Font Awesome -->
  <link rel="shortcut icon" href="/template/img/header/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <!-- Material Design Bootstrap -->
  <!-- Your custom styles (optional) -->
  <link rel="stylesheet" href="/template/css/mains.css">
  <link rel="stylesheet" href="/template/css/my/products.css">
  <link rel="stylesheet" href="/template/css/my/news.css">
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
</head>

<body>
  <!-- Start your project here-->
  <div class="section">

    <div class="container-fluid bg-nav">
      <div class="container header">
        <div class="wrap">
          <div class="wrap-block">
            <div class="row main-nav">
              <div class="col-md-5 navbar-items">
                <ul>
                  <li class='nav-items'><a href="#" class="nav-link">Support</a></li>
                  <li class='nav-items'><a href="#" class="nav-link">Delivery</a></li>
                  <li class='nav-items'><a href="#" class="nav-link">Legal</a></li>
                  <li class='nav-items'><a href="#" class="nav-link">About Us</a></li>
                </ul>
              </div>
              <div class="col-md-3"></div>
              <div class="col-md-4 log-bar">
                <?php if (User::checkLogged() != false): ?>
                <div class="content">
                  <ul class='log-items'>
                    <li class="log-items registr personal_account text-center"><a href="/cabinet"
                        class="nav-link">Personal
                        account<span style='color: #efcdb8'></span></a></li>
                    <li class="log-items log-in text-center exit"
                      style='box-sizing: border-box; width: 85px; border-radius: 7px; border: 1px solid #cd4a4c; background-color: transporent;'>
                      <a href="/user/logout" class="nav-link">Exit...</a></li>
                  </ul>
                </div>
                <?php else: ?>
                <div class="content">
                  <ul class='log-items'>
                    <li class="log-items log-in text-center"
                      style='border-radius: 7px; width: 140px; background-color: #cd4a4c; '><a href="/user/login"
                        class="nav-link">Login</a></li>
                    <li class="log-items registr text-center" style=" width: 85px;"><a href="user/register"
                        class="nav-link">Register</a></li>
                  </ul>
                </div>
                <?php endif;?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid bg-nav-mobile">
      <div class="container header">
        <div class="row nav">
          <div class="logo">
            <div class="wrap">
              <div class="wrap-block"><img src="/template/img/header/main-logo.png" alt=""> </div>
            </div>
          </div>
          <div id="burg"><img src="/template/img/header/Menu-512.png" alt="" class='burger'></div>
        </div>
        <div class="all">
          <div class=" navbar-items">
            <ul>
              <li class='nav-items'><a href="#" class="nav-link">Support</a></li>
              <li class='nav-items'><a href="#" class="nav-link">Delivery</a></li>
              <li class='nav-items'><a href="#" class="nav-link">Legal</a></li>
              <li class='nav-items'><a href="#" class="nav-link">About Us</a></li>
              <li class="classification nav-items"><a href="/index.php">Home</a></li>
              <li class="classification nav-items"><a href="#">Men</a></li>
              <li class="classification nav-items"><a href="#">Women</a></li>
              <li class="classification nav-items"><a href="includes/sales.php">Sales</a></li>
            </ul>
          </div>
          <div class="log-bar">
            <?php if (User::checkLogged() != false): ?>
            <div class="content">
              <ul class='log-items'>
                <li class="log-items registr personal_account"><a href="/cabinet" class="nav-link">Personal
                    account<span style='color: #efcdb8'></span></a></li>
                <li class="log-items log-in"
                  style='box-sizing: border-box; border-radius: 7px; border: 1px solid #cd4a4c; background-color: transporent;'>
                  <a href="/user/logout" class="nav-link">Exit...</a></li>
              </ul>
            </div>
            <?php else: ?>
            <div class="content">
              <ul class='log-items'>
                <li class="log-items log-in" style='border-radius: 7px; background-color: #cd4a4c; '><a
                    href="/user/login" class="nav-link">Login</<img>
                </li>
                <li class="log-items registr"><a href="user/register"
                    class="nav-link">Register</a></li>
              </ul>
            </div>
            <?php endif;?>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid bg-main-nav">
      <div class="container main-header">
        <div class="wrap">
          <div class="wrap-block">
            <div class="row nav">
              <div class="col-md-3 logo"><img src="/template/img/header/main-logo.png" alt=""></div>
              <div class="col-md-2"></div>
              <div class="col-md-7 nav-gg">
                <div class="content">
                  <ul>
                    <li class="classification"><a href="/index.php">Home</a></li>
                    <li class="classification"><a href="#">Men</a></li>
                    <li class="classification"><a href="#">Women</a></li>
                    <li class="classification"><a href="includes/sales.php">Sales</a></li>
                  </ul>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>