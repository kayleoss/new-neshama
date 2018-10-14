<?php
include "../layouts/head.php";
include "../layouts/nav.php";
?>
<div class="carousel slide text-center" data-ride="carousel" id="product-slides">
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
<section class="container p-5">
  <h3 class="h3 text-center">Our Handmade Products</h3>
  <p>All of our products are <b>100% natural</b>, made from essential oils and nature's essences. Our balms, scrubs, and oils are created by hand only, and with the utmost quality and standard.</p>
  <p>We accept PayPal for online orders. <span class="blue-border-bottom">Please make sure you have updated your billing and shipping address</span> in your PayPal account before placing an online order.<br /><br /><sup>*</sup>After you place an order online or in person, it will take approximately 1 week for the product to be made, and if ordered online, it may take up to two weeks for the product to be shipped to your address. </p>
  <div class="row mt-5 mb-5">
    <div class="col-sm-4 mb-4 pt-3 pb-3 product-border">
      <img src="../assets/bodyscrub.jpg" class="box-shadow service-image" />
      <h4 class="text-center text-info mt-4">Body Scrub</h4>
      <b class="text-success mt-3 block">$60 / 250mL</b>
      <p>Nullam augue eros, condimentum eget mollis a, porttitor nec velit. Sed suscipit odio pellentesque elementum vehicula. Suspendisse ut laoreet sem.</p>
      <div class="text-center">
        <a href="#" target="_blank" class="btn btn-custom text-light">Order Now</a>
      </div>
    </div>
    <div class="col-sm-4 mb-4 pt-3 pb-3 product-border">
      <img src="../assets/facialcleanser.jpg" class="box-shadow service-image" />
      <h4 class="text-center text-info mt-4">Facial Cleanser</h4>
      <b class="text-success mt-3 block">$60 / 250mL</b>
      <p>Nullam augue eros, condimentum eget mollis a, porttitor nec velit. Sed suscipit odio pellentesque elementum vehicula. Suspendisse ut laoreet sem.</p>
      <div class="text-center">
        <a href="#" target="_blank" class="btn btn-custom text-light">Order Now</a>
      </div>
    </div>
    <div class="col-sm-4 mb-4 pt-3 pb-3 product-border">
      <img src="../assets/footbalm.jpg" class="box-shadow service-image" />
      <h4 class="text-center text-info mt-4">Peppermint Foot Balm</h4>
      <b class="text-success mt-3 block">$60 / 250mL</b>
      <p>Nullam augue eros, condimentum eget mollis a, porttitor nec velit. Sed suscipit odio pellentesque elementum vehicula. Suspendisse ut laoreet sem.</p>
      <div class="text-center">
        <a href="#" target="_blank" class="btn btn-custom text-light">Order Now</a>
      </div>
    </div>
  </div>
  <hr class="mt-5" />
  <p class="text-center text-info weight-bold">You may additionally place orders in person with your therapist. Our clinic is located at 2 Carlton St, Suite 720. </p>
  <!-- Enter legal text here  -->
</section>
<?php include "../layouts/footer.php" ?>
