<?php include ROOT.'/views/layouts/header.php'?>
<img src="/template/img/header/sneakers.png" class='img-sneak' alt="">
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
  <div class="prevu-row">
    <div class="one-img">
      <h3 class='text-center'>Discover the new</br>
        <strong>NIKE KYRIE 3</strong></h3><button class='text-center'>VIEW COLLECTION</button>
    </div>
    <div class="lot-of-img"'>
      <div class="one">
        <h3 class=' text-center'>Check out the</br>
        <strong>NEW ARRIVALS</strong></h3><button>DISCOVER</button>
      </div>
      <div class="two">
        <div class="therth ">
          <h3 class='text-center'>Best for<br>
            <strong>ATHLETES</strong></h3>
        </div>
        <div class="four ">
          <h3 class='text-center'>Feel <br>
            <strong>PREMIUM</strong></h3>
      </div>
    </div>
  </div>
</div>
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
<div class="row slider">

  <?php foreach($latestProduct as $product): ?>
  <!-- How must look catalog_of_thing.php -->
  <?php if ($product['sale'] != ''): ?>
  <div class="features-block col-md-3 col-sm-6 col-xs-6 first">
    <a href="/product/<?php echo $product['id'];?>">
      <div class="content">
        <p>
          <?php echo $product['price'];?><br><strong><?php echo $product['price_sale'];?></strong>
        </p>
        <span><?php echo $product['sale'];?></span><img
          src="/template/img/fixed-carousel/<?php echo $product['images'];?>" alt="" class='dd'>
        <h3>
          <?php echo $product['sex'];?><br>
          <strong><?php echo $product['name'];?></strong><br>
          <i>#<?php echo $product['id'];?></i>
        </h3>
      </div>
    </a>
  </div>
  <?php else: ?>
  <div class="features-block col-md-3 col-sm-6 col-xs-6 first">
    <a href="/product/<?php echo $product['id'];?>">
      <div class="content">
        <p>
          <?php echo $product['price'];?><br><strong><?php echo $product['price_sale'];?></strong>
        </p>
        <img src="/template/img/fixed-carousel/<?php echo $product['images'];?>" alt="" class='dd'>
        <h3>
          <?php echo $product['sex'];?><br>
          <strong><?php echo $product['name'];?></strong><br>
          <i>#<?php echo $product['id'];?></i>
        </h3>
      </div>
    </a>
  </div>
  <?php endif?>
  <?php endforeach;?>


</div>
<div class=" slid-firms">
  <div class="tt">
    <img src="/template/img/firms/abibas.png" alt="">
  </div>
  <div class="tt">
    <img src="/template/img/firms/asics.png" alt="">
  </div>
  <div class="tt">
    <img src="/template/img/firms/balanciaga.png" alt="">
  </div>
  <div class="tt">
    <img src="/template/img/firms/fila.png" alt="">
  </div>
  <div class="tt">
    <img src="/template/img/firms/nuke.png" alt="">
  </div>
  <div class="tt">
    <img src="/template/img/firms/puma.png" alt="">
  </div>
</div>

</div>


<div class="container-fluid com">
  <div class="pluses-comments container">
    <div class="row comentstors">
      <div class="col-md-3"></div>
      <div class="col-md-6">
        <div class="row text-center">
          <div class="col-md-4 coments-men">
            <img src="/template/img/header/within.png" class='img-circle' alt="">
            <h4>Игорь</h4><img src="/template/img/header/star.png" alt="" class='dd'>
          </div>
          <div class="col-md-4  coments-men">
            <img src="/template/img/header/within.png" class='img-circle' alt="">
            <h4>Александр</h4><img src="/template/img/header/star.png" alt="" class='dd'>
          </div>
          <div class="col-xs-4 coments-men">
            <img src="/template/img/header/within.png" class='img-circle' alt="">
            <h4>Бомж Василий</h4><img src="/template/img/header/star.png" alt="" class='dd'>
          </div>
        </div>
      </div>
    </div>
    <div class="coments row text-center">
      <div class="col-md-12 rectangle">
        <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
          industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
          scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into
          electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of
          Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus
          PageMaker including versions of Lorem Ipsum.</span>
      </div>
    </div>
  </div>
</div>

</div>
</div>
<?php include ROOT.'/views/layouts/footer.php'?>