<!-------------------START----------------------->

<?php include_once ROOT. '/models/News.php';?>
<div class="container latest-news">
  <div class="text text-center"><span>Latest News</span></div>
    <div class="row cards">
    <?php $news = News::getLatestNews();?>
      <?php foreach($news as $news): ?>
      
        <div class="crd col-md-4">
          <a href="/news/<?php echo $news['id'];?>">
            <img src="/template/img/news/<?php echo $news['img'];?>" alt="">
            <div class="content">
              <h4><?php echo $news['date'];?></h4><span><?php echo $news['header'];?></span>
            </div>
          </a>
        </div>

      <?php endforeach;?>
    <!-- <div class="crd col-md-4"><img src="/template/img/header/card1.jpg" alt="">
      <div class="content">
        <h4>date</h4><span>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span>
      </div>
    </div>
    <div class="crd col-md-4"><img src="/template/img/header/card1.jpg" alt="">
      <div class="content">
        <h4>date</h4><span>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span>
      </div>
    </div> -->
  </div>
</div>


<div class="container-fluid help">
  <div class="wrapper">
    <div class="wrapper-block">
      <div class="container">
        <div class="row">
          <div class="col-md-1 col-sm-12 text-center">
            <div class="wrapper">
              <div class="wrapper-block"><img src="/template/img/header/message.png" alt=""></div>
            </div>
          </div>
          <div class="col-md-6 col-sm-12">
            <h3>Looking for help?<br><span>Have any question or need help with order? Let us know!</span></h3>
          </div>
          <div class="col-md-5 col-sm-12">
            <div class="wrapper">
              <div class="wrapper-block"><button>Make an inquiry</button></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="about-us container-fluid">
  <div class="container about-delivery">
    <div class="text-center deliviry-slider">
      <div class="free-shipping kk"><img src="/template/img/header/free.png" alt=""><span>Free shipping<br>in
          Europe</span></div>
      <div class="cashback kk"><img src="/template/img/header/cashback.png" alt=""><span>Money Back<br>Guarantee</span></div>
      <div class="support kk"><img src="/template/img/header/support.png" alt=""><span>24/7
          Customer<br>Support</span></div>
      <div class="price kk"><img src="/template/img/header/price.png" alt=""><span>Lowest
          Prices<br>Guaranteed</span></div>
      <div class="exclusive kk"><img src="/template/img/header/exlusive.png" alt=""><span>Exlusive Items<br>for
          Sportshold</span></div>
      <div class="delivery kk">
        <div class="wrapper">
          <div class="wrapper-block">
            <img src="/template/img/header/deliviry.png" alt=""><span>5-Days Delivery<br>in
              Europe</span></div>
        </div>
      </div>
    </div>
  </div>
  <div class="container linkks">
    <div class="wrapper">
      <div class="wrapper-block">
        <div class="row alls">
          <div class="col-md-4 col-xs-12 communication" id='def'>
            <div class="phone"><img src="/template/img/header/phone.png" alt="">
              <h3>call us<span>+7904-769-84-05</span></h3>
            </div>
            <div class="email"><img src="/template/img/header/email.png" alt="">
              <h3>Email us<span>rijic03@mail.ru</span></h3>
            </div>
            <div class="place"><img src="/template/img/header/place.png" alt="">
              <h3>Addres<span>Pushkina st</span></h3>
            </div>
          </div>
          <div class="col-md-2 col-xs-6 navigation">
            <h3>Navigation</h3>
            <a href='#'>Home</a>
            <a href='#'>About Us</a>
            <a href='#'>latest news</a>
            <a href='#'>reviews</a>
            <a href='#'>brands</a>
          </div>
          <div class="col-md-2 categories">
            <h3>Categories</h3>
            <a href='#'>men</a>
            <a href='#'>women</a>
            <a href='#'>accessories</a>
          </div>
          <div class="col-md-2 sales">
            <h3>Sales</h3>
            <a href='#'>New Arrivals</a>
            <a href='#'>Most Popular</a>
            <a href='#'>Top picks</a>
            <a href='#'>outlet</a>
          </div>
          <div class="col-md-2 support">
            <h3>Support</h3>
            <a href='#'>shopping & deliviry</a>
            <a href='#'>return policy</a>
            <a href='#'>terms of service</a>
            <a href='#'>privacy policy</a>
            <a href='#'>contact us</br>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container foooter">
    <div class="wrapper">
      <div class="wrapper-block">
        <div class="row">
          <div class="col-md-4 log"><img src="/template/img/header/main-logo.png" alt=""></div>
          <div class="col-md-4 text-center by_how">
            <h3 style='color: #fff; text-decoration: none;'>© 2019 SportsHold. All rights reserved.</h3>
          </div>
          <div class="col-md-4 social">
            <div class="social-img text-center">
              <img src="/template/img/header/twitter.png" alt="" id='twiter'>

              <img src="/template/img/header/facebook.png" alt="">

              <img src="/template/img/header/instagram.png" alt="">

              <img src="/template/img/header/youtube.png" alt=""></<img>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-------------------END----------------------->


<!-- SCRIPTS -->
<!-- JQuery -->
<script type="text/javascript" src="/template/js/jquery-3.4.1.min.js"></script>
<!-- Bootstrap tooltips -->
<!-- Bootstrap core JavaScript -->
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
            slidesToShow: 3,
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
<script>
  $(document).ready(function () {
    $('.deliviry-slider').slick({
      infinite: true,
      slidesToShow: 6,
      slidesToScroll: 1,
      prevArrow: '<button class="prev"></button>',
      nextArrow: '<button class="next"></button>',
      responsive: [{
          breakpoint: 991,
          settings: {
            slidesToShow: 3,
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
<script src='/tem/template/js/My/index.js'></script>
<script>
  $('.all').hide();
  $('#burg').on('click', function(){
    $('.all').slideToggle();
  })
</script>
</body>

</html>