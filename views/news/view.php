<?php include ROOT.'/views/layouts/header.php'?>
<div class="container news" >
  <div class="content">
  <?php foreach($ItemNews as $item); ?>
    <h3 class='text-center'><?php echo $item['header'];?></h3>
    <span><img src="/template/img/news/<?php echo $item['img'];?>" alt=""><?php echo $item['description'];?></span>
    
  </div>
</div>
<?php include ROOT.'/views/layouts/footer.php'?>