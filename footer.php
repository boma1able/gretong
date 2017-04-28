
<section class="footer">

	<div class="container">
		<div class="row">
			<div class="social-bottom">
				<ul>
					<h4>follow us on</h4>
					<li><a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					<li><a href=""><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
					<li><a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					<li><a href=""><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
				</ul>
			</div>

			<div class="sub-form">
				<input type="email" placeholder="Enter your email to join our newsletter">
				<button class="sub-btn" type="submit">JOIN</button>
			</div>

		</div>
	</div>
</section>


<section>
	<div class="container">
		<div class="row">
			<div class="widgets-area">
				<div class="col-md-2">

					<?php dynamic_sidebar( 'foo-widget-4' ); ?>

				</div>
				<div class="col-md-2">

					<?php dynamic_sidebar( 'foo-widget-2' ); ?>

				</div>
				<div class="col-md-2">

					<?php dynamic_sidebar( 'foo-widget-3' ); ?>

				</div>
				<div class="col-md-6">
					<div class="str">
						<h4 class="stores">OUR STORES</h4>
						<span2>SOLO</span2>
						<span3>BOGOR</span3>
					</div>
					<div class="clearfix"></div>
					<ul>
						<li><a href=""><i class="fa fa-map-marker" aria-hidden="true"></i> Jl. Haji Muhidin, Blok G no.69</a></li>
						<li><a href=""><i class="fa fa-phone" aria-hidden="true"></i> 025-2839341</a></li>
						<li><a href=""><i class="fa fa-envelope-o" aria-hidden="true"></i>
								solo@gretong.com</a></li>
					</ul>
				</div>


			</div>
			<div class="deep-botton">
				<p>&copy; 2015 Gretongan</p>
				<p>Terms & Condition</p>
				<p>Privacy Policy</p>
			</div>
		</div>
	</div>
</section>

<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>-->
<!--<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.js"></script>-->
<!--<script src="js/bootstrap.min.js"></script>-->
<!--<script src="js/loader.js"></script>-->
<!--<script src="https://use.fontawesome.com/813411220b.js"></script>-->
<!--  <script src="js/menu.js"></script>-->

<?php wp_footer();?>

<script>
	$('.grid').masonry({
		itemSelector: '.grid-item',
		columnWidth: 10,
		gutter: 20
	});

</script>
</body>

</html>
