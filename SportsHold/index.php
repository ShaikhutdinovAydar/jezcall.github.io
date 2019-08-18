<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>SportsHold</title>
  <!-- Font Awesome -->
  <link rel="shortcut icon" href="media/img/header/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <!-- Material Design Bootstrap -->
  <!-- Your custom styles (optional) -->
  <link rel="stylesheet" href="media/css/main.css">
  <link rel="stylesheet" href="./media/css/my/id_feautere.css">
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
</head>

<body>

  <!-- Start your project here-->
  <div class="section">
    <img src="media/img/header/sneakers.png" class='img-sneak' alt="">
    <?php include "includes/header.php"; ?>
    <div class="container-fluid bg-header-content">
      <div class="container header-content">
        <div class="wrap">
          <div class="wrap-block">
            <div class="row kk">
              <div class="col-md-6"></div>
              <div class="col-md-6 joins">
                <h3>From $80.00</h3>
                <h1>Nike Air Max</h1>
                <strong>50 Variants</strong>
                <span>Since this is our favorite sneaker, we’re bringing you</br>
                  50 variants to suit everyone’s needs.</span>
                <button>BROWSE VARIANTS</button>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
    <div class="container prevu-sneakers">
      <div class="row prevu-row">
        <div class="col-md-6 one-img">
          <img src="media/img/header/first-sneakers.png" alt="">
          <h3 class='text-center'>Discover the new</br>
            <strong>NIKE KYRIE 3</strong></h3><button class='text-center'>VIEW COLLECTION</button>
        </div>
        <div class="col-md-6 lot-of-img"'>
          <div class="row kk">
            <div class="col-md-12 one">
              <img src="media/img/header/second-sneakers.png" alt=""><h3 class=' text-center'>Check out the</br>
          <strong>NEW ARRIVALS</strong></h3><button>DISCOVER</button>
        </div>
        <div class="col-md-12 two">
          <div class="row">
            <div class="col-md-6 therth ">
              <h3 class='text-center'>Best for<br>
                <strong>ATHLETES</strong></h3>
            </div>
            <div class="col-md-6 four ">
              <h3 class='text-center'>Feel <br>
                <strong>PREMIUM</strong></h3>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <form method='POST'>
    <div class="row different text-center">
      <div class="col-md-12">
        <ul>
          <a href="#">
            <li class='style'>new</li>
          </a>
          <a href="#">
            <li class='style'>popular</li>
          </a>
          <a href="#">
            <li class='style'>top picks</li>
          </a>
          <a href="#" class='tututu'>
            <li class='style'>all goods</li>
          </a>
        </ul>
      </div>
    </div>
  </form>
  <div class="row slider">
    <?php include "includes/catalog_of_thing.php"?>
    
        <!-- How must look catalog_of_thing.php

        <div class="features-block col-md-3 col-sm-6 col-xs-6 first">
          <a href="#">
            <div class="content">
              <p>
                $45.00<br><strong>$60.00</strong>
              </p>
              <span>-25%</span><img src="media/img/fixed-carousel/converse4.png" alt="" class='dd'>
              <h3>
                MEN<br>
                <strong>Converse Breakpoint Suede Blue</strong><br>
                <i>#16378271</i>
              </h3>
            </div>
          </a>
        </div> -->
   
  </div>
  <div class=" slid-firms">
    <div class="tt">
      <img src="media/img/firms/abibas.png" alt="">
    </div>
    <div class="tt">
      <img src="media/img/firms/asics.png" alt="">
    </div>
    <div class="tt">
      <img src="media/img/firms/balanciaga.png" alt="">
    </div>
    <div class="tt">
      <img src="media/img/firms/fila.png" alt="">
    </div>
    <div class="tt">
      <img src="media/img/firms/nuke.png" alt="">
    </div>
    <div class="tt">
      <img src="media/img/firms/puma.png" alt="">
    </div>
  </div>


  </div>
  </div>
  </div>
  <!-------------------END----------------------->
  <?php include "includes/basket.php";?>
  <?php include "includes/id_feauteres_block.php"?>
  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="media/js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="media/js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <!-- Подключаем стили Slick slider -->
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
  <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <!-- Инициализируем слайдер -->
  <script>
    $(document).ready(function () {
      $('.slid-firms').slick({
        infinite: true,
        slidesToShow: 6,
        slidesToScroll: 1,
        prevArrow: '<button class="prev"></button>',
        nextArrow: '<button class="next"></button>',
        responsive: [{
            breakpoint: 991,
            settings: {
              slidesToShow: 4,
              slidesToScroll: 1,
              infinite: true,
            }
          },
          {
            breakpoint: 767,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 2
            }
          },
          {
            breakpoint: 480,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          },
          // You can unslick at a given breakpoint now by adding:
          // settings: "unslick"
          // instead of a settings object
        ]
      });
    });
  </script>
  <script src='./media/js/My/gg.js'></script>
</body>

</html>