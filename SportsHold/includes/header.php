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
            <?php
              if ($_COOKIE['user'] = 'true'):
            ?>
            <div class="content">
              <ul class='log-items'>
                <li class="log-items registr"><a href="#" class="nav-link">Personal account...</a></li>
                <li class="log-items log-in" style='box-sizing: border-box; border-radius: 7px; border: 1px solid #cd4a4c; background-color: transporent;margin-left: 15px;'><a href="includes/enter.php" class="nav-link">Exit...</a></li>
              </ul>
            </div>
            <?php else: ?>
            <div class="content">
              <ul class='log-items'>
                <li class="log-items log-in" style='border-radius: 7px; background-color: #cd4a4c; '><a href="includes/enter.php" class="nav-link">Login</a></li>
                <li class="log-items registr"><a href="includes/login.php" class="nav-link">Register</a></li>
              </ul>
            </div>
            <?php endif;?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container-fluid bg-main-nav">
  <div class="container main-header">
    <div class="wrap">
      <div class="wrap-block">
        <div class="row nav">
          <div class="col-md-3 logo"><img src="../media/img/header/main-logo.png" alt=""></div>
          <div class="col-md-2"></div>
          <div class="col-md-7 nav-gg">
            <div class="content">
              <ul>
                <li class="classification"><a href="#">Home</a></li>
                <li class="classification"><a href="#">Men</a></li>
                <li class="classification"><a href="#">Women</a></li>
                <li class="classification"><a href="#">Our Brands</a></li>
                <li class="classification"><a href="#">Sales</a></li>
              </ul>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>