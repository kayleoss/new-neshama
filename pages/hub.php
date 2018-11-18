<?php 

	$page_title = "Neshama Therapy: Hub - A place for health and wellness sharing";
	$book_now_button = false;
	$banner_heading = "Neshama Hub";
	$banner_text = "A community for all discussion related to health & wellness, and if you have related comments/questions or would like to share health tips";
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

	 if (isset($_GET['success'])) {
	 	echo "<p class='text-center mt-3 mb-0 text-success'>Post success</p>";
	 } else if (isset($_GET['failure']) && $_GET['failure'] == 'short' ) {
	 	echo "<p class='text-center mt-3 mb-0 text-danger'>Failed to submit. Post was too short.</p>";
	 } else if (isset($_GET['failure']) && $_GET['failure'] == 'long' ) {
	 	echo "<p class='text-center mt-3 mb-0 text-danger'>Failed to submit. Post must be under 8000 characters.</p>";
	 }
	 
?>
<section class="container p-5">
	<section class="row bg-main-transparent container product-border p-3 pb-3 mr-0 ml-0">
		<h3 class="text-center text-light col-sm-12 mt-3">Sharing & Discussion Board</h3>
		<div class="col-sm-8" id="posts">
			<div class="row mt-3">
				<?php foreach ($posts as $p): ?>
					<div class="col-sm-4 speech-bubble p-3">
						<?php echo $p->text; ?>
					</div>
				<?php endforeach; ?>	
			</div>
		</div>
		<div class="col-sm-4">
			<form action="/includes/post-resolve.php" method="POST">
				<textarea class="block form-control p-2 mt-3 mb-3 w-75 mr-auto ml-auto" data-text-input placeholder="Share what's on your mind..." name="input" required></textarea>
				<button type="submit" class="navbar-toggler btn-custom-light block m-auto text-light" data-submit>Post</button>
			</form>
		</div>
	</section>
</section>
<section class="mt-5 p-5 therapist-intro">
	<div class="text-center">
		<h4 class="text-light weight-bold">Want to join the discussion with certified RMT and TCM therapists?<br>Join the Neshama Therapist Hub!</h4>
		<a href="mailto:neshamatherapy@gmail.com" class="btn btn-custom text-light mt-3">Apply for the Therapist Hub</a>
	</div>
</section>
<?php 
	include "../layouts/footer.php";
?>