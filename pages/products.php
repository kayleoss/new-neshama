<?php
  $page_title = "Neshama Therapy: All Natural Local Handmade Products";
  include "../layouts/head.php";
  include "../layouts/nav.php";
  include_once '../includes/db.php';

  $sql = 'SELECT * FROM products;';
  $result = mysqli_query($conn, $sql);
  $products = [];

  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      $product = new stdClass();
      $product->name = $row['product_name'];
      $product->likes = $row['product_likes'];
      $products[] = $product;
    }
  }
  
  if (isset($_POST['product'])) {
    if ($_POST['product'] == 'bodyscrub') {
      $sql = "UPDATE products set product_likes = product_likes+1 where product_id = '1'";
      mysqli_query($conn, $sql);
    } else if ($_POST['product'] == 'facialcleanser') {
      $sql = "UPDATE products set product_likes = product_likes+1 where product_id = '2'";
      mysqli_query($conn, $sql);
    } else if ($_POST['product'] == 'footbalm') {
      $sql = "UPDATE products set product_likes = product_likes+1 where product_id = '3'";
      mysqli_query($conn, $sql);
    }
  }

?>
<script>
  function like(product) {
    $.ajax({
      type: "POST",
      url: "/pages/products.php",
      data: {
        product: product
      },
      success: disableButtonAndUpdateNum(product) 
    });
  }

  function disableButtonAndUpdateNum(button) {
    $('.' + button).attr('disabled', true);
    var text = $('.' + button).parent().text().trim();
    var num = parseInt(text.split(" ")[0]) + 1;
    if (num == 1) {
      $('.' + button).siblings('.inline').html(num + " like");
    } else {
      $('.' + button).siblings('.inline').html(num + " likes");
    }
  }
</script>
<div class="container carousel slide text-center" data-ride="carousel" id="product-slides">
  <ol class="carousel-indicators hide-on-mobile">
    <li data-target="#product-slides" data-slide-to="0" class="active"></li>
    <li data-target="#product-slides" data-slide-to="1"></li>
    <li data-target="#product-slides" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100 m-auto" src="/assets/bodyscrub-slide.jpg" alt="Body Scrub">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 m-auto" src="/assets/facialcleanser-slide.jpg" alt="Facial Cleanser">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 m-auto" src="/assets/footbalm-slide.jpg" alt="Foot Balm">
    </div>
  </div>
</div>
<section class="container pt-5 pb-3" id="product-section">
  <h3 class="h3 text-center">Our Handmade Natural Products</h3>
  <p class="text-center font-italic text-secondary">Organic, Local, & Environmentally Friendly</p>
  <p>All of our products are <b class="text-info">100% natural, environmentally friendly, and made from local organic ingredients with love</b>. Each product helps create healing effects for the body, mind and soul. We accept PayPal for online orders. <br><br> <span class="blue-border-bottom">Please make sure you have updated your billing and shipping address in your PayPal account</span> before placing an online order. </p>
</section>
<section class="bg-light-opaque pt-3 pb-3">
  <div class="container">
    <div class="row">
      <div class="col-sm-4 mb-4 pt-3">
        <div class="product-border p-4">
          <img src="../assets/bodyscrub.jpg" class="box-shadow service-image" />
          <a href="/pages/bodyscrub"><h4 class="text-center text-info mt-4">Body Scrub</h4></a>
          <b class="text-success mt-3 block text-center mb-3">$60 CAD</b>
          <ul class="mb-0">
            <li>Organic sweet almond oil</li>
            <li>Finely ground sea salt</li>
            <li>Essential Oils: tea tree, bergamot, ylang ylang and lavender</li>
            <br />
          </ul>
          <div class="text-center row m-auto">
            <div class="container">
              <a href="/pages/bodyscrub" target="_blank" class="btn btn-custom-light text-light m-auto">Read More</a>
              <a href="#" target="_blank" class="btn btn-custom text-light m-auto">Order Now</a>
            </div>
          </div>
          <div class="text-center mt-2 weight-bold">
            <button type="submit" value="like" name="bodyscrub" class="border-0 text-primary bodyscrub" onclick="like('bodyscrub')">
              <i class="fa fa-thumbs-up fa-2x"></i>
            </button> 
            <p class="inline">
            <?php 
              if ($products[0]->likes == 1) {
                echo $products[0]->likes . " like";
              } else {
                echo $products[0]->likes . " likes";
              }
            ?>
            </p>
          </div>
        </div>
      </div>
      <div class="col-sm-4 mb-4 pt-3">
        <div class="product-border p-4">
          <img src="../assets/facialcleanser.jpg" class="box-shadow service-image" />
          <a href="/pages/facialcleanser"><h4 class="text-center text-info mt-4">Facial Cleanser</h4></a>
          <b class="text-success mt-3 block text-center mb-3">$60 CAD</b>
          <ul class="mb-0">
            <li>Finely ground sea salt</li>
            <li>Organic sweet almond oil</li>
            <li>Tea tree oil</li>
            <li>Vitamin E capsule</li>
            <br />
          </ul>
          <div class="text-center row m-auto">
            <div class="container">
              <a href="/pages/facialcleanser" target="_blank" class="btn btn-custom-light text-light m-auto">Read More</a>
              <a href="#" target="_blank" class="btn btn-custom text-light m-auto">Order Now</a>
            </div>
          </div>
          <div class="text-center mt-2 weight-bold">
            <button type="submit" value="like" name="facialcleanser" class="border-0 text-primary facialcleanser" onclick="like('facialcleanser')"><i class="fa fa-thumbs-up fa-2x"></i></button>
            <p class="inline">
              <?php 
                if ($products[1]->likes == 1) {
                  echo $products[1]->likes . " like";
                } else {
                  echo $products[1]->likes . " likes";
                }
              ?>
            </p>
           </div>
        </div>
      </div>
      <div class="col-sm-4 mb-4 pt-3">
        <div class="product-border p-4">
          <img src="../assets/footbalm.jpg" class="box-shadow service-image" />
          <a href="/pages/footbalm"><h4 class="text-center text-info mt-4">Peppermint Foot Balm</h4></a>
          <b class="text-success mt-3 block text-center mb-3">$60 CAD</b>
          <ul class="mb-0">
            <li>Shea butter</li>
            <li>Organic virgin coconut oil</li>
            <li>Essential oils: Peppermint, Eucalyptus, Rosemary</li>
            <br>
          </ul>
          <div class="text-center row m-auto">
            <div class="container">
              <a href="/pages/footbalm" target="_blank" class="btn btn-custom-light text-light m-auto">Read More</a>
              <a href="#" target="_blank" class="btn btn-custom text-light m-auto">Order Now</a>
            </div>
          </div>
          <div class="text-center mt-2 weight-bold">
            <button type="submit" value="like" name="footbalm" class="border-0 text-primary footbalm" onclick="like('footbalm')"><i class="fa fa-thumbs-up fa-2x"></i></button>
            <p class="inline">
            <?php 
              if ($products[2]->likes == 1) {
                echo $products[2]->likes . " like";
              } else {
                echo $products[2]->likes . " likes";
              }
            ?>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <p class="mt-3 pt-3 pb-3 mb-3 text-center text-info weight-bold">You may also choose to place orders in person with a therapist. Our clinic is located at 2 Carlton St, Suite 720. </p>
</section>
<?php include "../layouts/footer.php" ?>
