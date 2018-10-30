<section class="banner w-100 p-5" style="background: url('<?= $banner_img_src; ?>'); background-size: cover">
	<h3 class="text-light text-shadow large-text text-center mt-5 mobile-no-margin underline"><?= $banner_heading; ?></h3>
	<h4 class="text-light text-shadow col-md-6 offset-md-3"><?= $banner_text; ?></h4>
	<?php if ($book_now_button !== false): ?>
	<div class="text-center mt-3">
		<a class="btn btn-custom text-light" href="https://www.massagebook.com/profiles/publicBooking/1676236" target="blank">Book Now</a>
	</div>
	<?php endif; ?>
</section>
