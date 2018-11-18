<?php 
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	$page_title = "Neshama Therapy: Hub - A place for health and wellness sharing";
	$book_now_button = false;
	$banner_heading = "Neshama Hub";
	$banner_text = "This is a forum for all discussion related to health and wellness! If you have related comments/questions or would like to share health tips, this is a safe place to do so.";
	$banner_img_src = "https://ar.unesco.org/sites/default/files/banner_ifap_938x488.jpg";
	include "../layouts/head.php";
	include "../layouts/nav.php";	
	include "../layouts/banner.php";
	include_once "../includes/db.php";

	 $sql = 'SELECT * FROM posts;';
	 $result = mysqli_query($conn, $sql);
	 $posts = [];

	 if (mysqli_num_rows($result) > 0) {
	    while ($row = mysqli_fetch_assoc($result)) {
	      $post = new stdClass();
	      $post->text = $row['text'];
	      $posts[] = $post;
	    }
	  }
?>
<section class="container p-5">
	<section class="row bg-main-transparent container product-border p-3">
		<h3 class="text-center text-light col-sm-12 mt-3">Sharing & Discussion Board</h3>
		<div class="col-sm-8">
			<div class="row">
				<?php foreach ($posts as $p): ?>
					<div class="col-sm-4">
						<div class="speech-bubble p-3">
							<?php echo $posts[0]->text; ?>
						</div>
					</div>
				<?php endforeach; ?>	
			</div>
		</div>
		<div class="col-sm-4">
			<textarea class="block form-control p-2 mt-3 mb-3 w-75 mr-auto ml-auto" data-text-input placeholder="Share what's on your mind!"></textarea>
			<button class="navbar-toggler btn-custom-light block m-auto text-light" data-submit>Post</button>
		</div>
	</section>
</section>
<script>
	$('button[data-submit]').on('click', function() {
		var input = $('textarea[data-text-input]').val();
		if (input.length > 1) {
			//handle post here
		} else {
			alert("You tried to submit an empty post.")
		}
	});
</script>
<section class="mt-5 p-5 therapist-intro">
	<div class="text-center">
		<h4 class="text-light weight-bold">Want to join the discussion with certified RMT and TCM therapists?<br>Join the Neshama Therapist Hub!</h4>
		<a href="mailto:neshamatherapy@gmail.com" class="btn btn-custom text-light mt-3">Apply for the Therapist Hub</a>
	</div>
</section>
<?php 
	include "../layouts/footer.php";
?>