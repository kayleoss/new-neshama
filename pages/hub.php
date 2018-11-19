<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
	$page_title = "Neshama Therapy: Hub - A place for health and wellness sharing";
	$banner_text = "A community for all discussion related to health & wellness, and if you have related comments/questions or would like to share health tips. Posts in this community are moderated daily, please be kind and respectful of others.";
	include "../layouts/head.php";
	
	
	include_once "../includes/db.php";

	 $sql = 'SELECT * FROM posts;';
	 $result = mysqli_query($conn, $sql);
	 $posts = [];

	 if (mysqli_num_rows($result) > 0) {
	    while ($row = mysqli_fetch_assoc($result)) {
	      $post = new stdClass();
	      $post->text = $row['text'];
	      $post->author = $row['author'];
	      $posts[] = $post;
	    }
	  }
	 
?>
<div class="why-neshama">
<?php 
include "../layouts/nav.php";
?>
<section class="row p-5">
	<div class="container mb-4">
		<h2 class="text-light weight-bold text-center mt-3 text-shadow">Neshama Hub</h2>
		<h4 class="text-light text-shadow text-center">A community for all discussion related to health & wellness, related comments/questions and/or health tips. Posts in this forum are moderated daily, please be kind and respectful of others.</h4>
	</div>
	<?php 
		if (isset($_GET['success'])) {
		 	echo "<p class='col-sm-12 text-center mt-3 mb-4 block text-color-piercing small-med-text text-shadow'>Successfully posted!</p>";
		 } else if (isset($_GET['failure']) && $_GET['failure'] == 'short' ) {
		 	echo "<p class='col-sm-12 text-center mt-3 mb-4 block text-danger'>Failed to submit. Post was too short.</p>";
		 } else if (isset($_GET['failure']) && $_GET['failure'] == 'long' ) {
		 	echo "<p class='col-sm-12 text-center mt-3 mb-4 block text-danger'>Failed to submit. Post must be under 8000 characters.</p>";
		 } else if (isset($_GET['failure']) && $_GET['failure'] == 'shortname' ) {
		 	echo "<p class='col-sm-12 text-center mt-3 mb-4 block text-danger'>Failed to submit. Name/identifier was too short.</p>";
		 }
	?>
	<div class="col-sm-8">
		<section class="row bg-transparent-light container p-5 mr-0 ml-0 pb-5">
			<h3 class="text-center text-light col-sm-12 text-shadow">Sharing & Discussion Board</h3>
			<div class="col-sm-12" id="posts">
				<div class="row mt-3">
					<?php foreach ($posts as $p): ?>
						<div class="col-sm-4 speech-bubble pt-1 pb-1 pr-3 pl-3">
							<?php echo "<hr>" . $p->text . "<br><p class='text-right mb-0 font-italic'>" . "-" . $p->author . "</p><hr>"; ?>
						</div>
					<?php endforeach; ?>	
				</div>
			</div>
		</section>
	</div>
	<div class="col-sm-4">
		<section class="container pb-5 mr-0 ml-0 text-center">
			<div class="bg-transparent-light p-3">
				<h3 class="text-center text-light col-sm-12 mt-3 text-shadow">Create A Post</h3>
				<form action="/includes/post-resolve.php" method="POST" class="col-sm-12 block post-form">
					<input type="text" class="form-control w-75 mt-3 mr-auto ml-auto" name="author" placeholder="Enter your name or identifer" required>
					<textarea class="block form-control p-2 mt-3 mb-3 w-75 mr-auto ml-auto" placeholder="Share what's on your mind..." name="input" required></textarea>
					<button type="submit" class="navbar-toggler btn-custom-light block m-auto text-light" data-submit>Post</button>
				</form>
			</div>
			<div class="bg-transparent-light mt-3 pt-3 pb-5 pr-3 pl-3">
				<h3 class="text-center text-light col-sm-12 mt-3 text-shadow">Resources</h3>
				<a href="/pages/firstvisit" target="_blank" class="p-3 border bg-light mt-3 inline-block text-info w-75">
		        <i class="fas fa-link fa-2x text-info"></i>
		        Your First Visit
		      </a>
		      <a href="/pages/rates" target="_blank" class="p-3 border bg-light mt-3 inline-block text-info w-75">
		        <i class="fas fa-link fa-2x text-info"></i>
		        Service Rates
		      </a>
		      <a href="/pages/all-services" target="_blank" class="p-3 border bg-light mt-3 inline-block text-info w-75">
		        <i class="fas fa-link fa-2x text-info"></i>
		        Our Services
		      </a>
				<a href="/assets/acupuncture-health-history.docx" class="p-3 border bg-light mt-3 inline-block text-info w-75">
			        <i class="fas fa-download fa-2x text-info"></i>
			        Acupuncture Health Form
			     </a><br>
		      <a href="/assets/massage-health-history.pdf" target="_blank" class="p-3 border bg-light mt-3 inline-block text-info w-75">
		        <i class="fas fa-download fa-2x text-info"></i>
		        Massage Health Form
		      </a><br>
		      <a href="/assets/privacy.pdf" target="_blank" class="p-3 border bg-light mt-3 inline-block text-info w-75">
		        <i class="fas fa-download fa-2x text-info"></i>
		        Privacy Policy
		      </a>
		  	</div>
		</section>
	</div>
</section>
<!-- <section class="mt-5 p-5 therapist-intro">
	<div class="text-center">
		<h4 class="text-light weight-bold">Want to join the discussion with certified RMT and TCM therapists?<br>Join the Neshama Therapist Hub!</h4>
		<a href="mailto:neshamatherapy@gmail.com" class="btn btn-custom text-light mt-3">Apply for the Therapist Hub</a>
	</div>
</section> -->
</div>
<?php 
	include "../layouts/footer.php";
?>