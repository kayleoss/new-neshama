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
<section class="container pt-5 pb-3">
  <h3 class="h3 text-center">Our Handmade Products</h3>
  <p>All of our products are <b class="text-info">100% natural, environmentally friendly, and made from local organic ingredients with love</b>. Each product helps create healing effects for the body, mind and soul. We accept PayPal for online orders. <span class="blue-border-bottom">Please make sure you have updated your billing and shipping address</span> in your PayPal account before placing an online order. </p>
</section>
<section class="bg-light-opaque pt-3 pb-3">
  <div class="container">
    <div class="row gutter-small">
      <div class="col-sm-4 mb-4 pt-3">
        <div class="product-border p-4">
          <img src="../assets/bodyscrub.jpg" class="box-shadow service-image" />
          <a href="/pages/bodyscrub"><h4 class="text-center text-info mt-4">Body Scrub</h4></a>
          <b class="text-success mt-3 block text-center mb-3">$60 CAD</b>
          <ul>
            <li>Organic sweet almond oil</li>
            <li>Finely ground sea salt</li>
            <li>Essential Oils: tea tree, bergamot, ylang ylang and lavender</li>
            <br />
          </ul>
          <a href="/pages/bodyscrub" class="text-center block w-100 mb-3">Read more about this product</a>
          <div class="text-center">
            <a href="#" target="_blank" class="btn btn-custom text-light">Order Now</a>
          </div>
        </div>
      </div>
      <div class="col-sm-4 mb-4 pt-3">
        <div class="product-border p-4">
          <img src="../assets/facialcleanser.jpg" class="box-shadow service-image" />
          <a href="/pages/facialcleanser"><h4 class="text-center text-info mt-4">Facial Cleanser</h4></a>
          <b class="text-success mt-3 block text-center mb-3">$60 CAD</b>
          <ul>
            <li>Finely ground sea salt</li>
            <li>Organic sweet almond oil</li>
            <li>Tea tree oil</li>
            <li>Vitamin E capsule</li>
            <br />
          </ul>
          <a href="/pages/facialcleanser" class="text-center block w-100 mb-3">Read more about this product</a>
          <div class="text-center">
            <a href="#" target="_blank" class="btn btn-custom text-light">Order Now</a>
          </div>
        </div>
      </div>
      <div class="col-sm-4 mb-4 pt-3">
        <div class="product-border p-4">
          <img src="../assets/footbalm.jpg" class="box-shadow service-image" />
          <a href="/pages/footbalm"><h4 class="text-center text-info mt-4">Peppermint Foot Balm</h4></a>
          <b class="text-success mt-3 block text-center mb-3">$60 CAD</b>
          <ul>
            <li>Shea butter</li>
            <li>Organic virgin coconut oil</li>
            <li>Peppermint essential oil</li>
            <li>Eucalyptus essential oil</li>
            <li>Rosemary essential oil</li>
          </ul>
          <a href="/pages/footbalm" class="text-center block w-100 mb-3">Read more about this product</a>
          <div class="text-center">
            <a href="#" target="_blank" class="btn btn-custom text-light">Order Now</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <p class="mt-3 pt-3 pb-3 mb-3 text-center text-info weight-bold">You may also choose to place orders in person with a therapist. Our clinic is located at 2 Carlton St, Suite 720. </p>
</section>
<?php include "../layouts/footer.php" ?>
