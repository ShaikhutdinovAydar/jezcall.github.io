<?php include ROOT.'/views/layouts/header.php'?>
<div class="container gg">
  <div class="content">
    <div class="img-block"><img src="/template/img/fixed-carousel/<?php echo $ItemProduct['images'];?>" alt=""></div>
    <div class="order-block">
      <h3 style='margin-bottom: 0; color: #808080;'>Originals</h3>
      <div class="name"><?php echo $ItemProduct['name'];?></div>
      <div class="sex"><?php echo $ItemProduct['sex'];?></div>
      <h3>Be careful: the tag does not have the size of RU, so not to get confused, check the size of UK.</h3>
      <h5 style='margin-top: 20px;'>This product is only available in the online store</h5>
      <div class="size">
        <div class="size-gg"><button>38</button></div>
        <div class="size-gg"><button>39</button></div>
        <div class="size-gg"><button>40</button></div>
        <div class="size-gg"><button>41</button></div>
        <div class="size-gg"><button>42</button></div>
        <div class="size-gg"><button>43</button></div>
        <div class="size-gg tutu"><button>44</button></div>
      </div>
      <div class="button-to-order">
        <button type="button" class="btn btn-success" style=" background-color: #ff7373; ">Add to basket</button>
        <button type="button" class="btn btn-success kk">Order</button>
      </div>
    </div>
    <div class="description">
      <?php 
      $description = $ItemProduct['description'];
      $res = explode('\/', $description);
            foreach($res as $productI) {
              echo '<h3>'.$productI.'</h3>';
            }
      ?>
    </div>
  </div>
</div>
<?php include ROOT.'/views/layouts/footer.php'?>