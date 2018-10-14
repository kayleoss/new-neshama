<section class="rmt p-5">
  <div class="container">
    <div class="col-sm-8 offset-md-2">
      <h3 class="h3 text-center med-text"><?= $title ?></h3>
      <p><?= $description ?></p>
    </div>
    <div class="row mt-5">
      <?php foreach($services as $s): ?>
      <div class="col-sm-4 mt-3">
        <img src="<?= $s->image_src ?>" class="box-shadow service-image">
        <h4 class="text-center text-info mt-4"><?php echo $s->name; ?></h4>
        <p><?= $s->text ?></p>
      </div>
      <?php endforeach; ?>
      <div class="col-sm-12 text-center">
        <hr>
        <a href="https://www.massagebook.com/profiles/publicBooking/1676236" class="mt-3 btn btn-custom-light text-light" target="_blank">Book Now</a>
      </div>
    </div>
  </div>
</section>
