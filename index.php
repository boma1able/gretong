
<?php get_header();?>

<!--CONTENT-->
<div class="grid">
	<div class="grid-item grid-item--width2 grid-item--height2">

	<?php
		$taxonomyName = "product_cat";
		$prod_categories = get_terms($taxonomyName, array(
			'orderby'=> 'id',
			'order' => 'ASC',
			'hide_empty' => 1,
			'number' => 1
		));

		foreach( $prod_categories as $prod_cat ) :
			if ( $prod_cat->parent != 0 )
				continue;
			$cat_thumb_id = get_woocommerce_term_meta( $prod_cat->term_id, 'thumbnail_id', true );
			$cat_thumb_url = wp_get_attachment_image_src( $cat_thumb_id, 'thumbnail-size' )[0];
			$term_link = get_term_link( $prod_cat, 'product_cat' );
			?>

			<div class="new-arrivals">
				<div class="overlay"></div>
				<img src="<?php echo $cat_thumb_url; ?>" alt="cat-img" />
				<div class="info-top">
					<h3><a class="button" href="<?php echo $term_link; ?>"> <?php echo $prod_cat->name; ?> </a></h3>
					<p><?php echo $prod_cat->description; ?></p>
					<a class="content-btn"  href="<?php echo $term_link; ?>">
						take a look
					</a>
				</div>
			</div>


		<?php endforeach;
		wp_reset_query();

		?>

	</div>
	<div class="grid-item grid-item--width2 grid-item--height2">
		<?php
		$taxonomyName = "product_cat";
		$prod_categories = get_terms($taxonomyName, array(
			'orderby'=> 'id',
			'order' => 'ASC',
			'hide_empty' => 1,
			'number' => 1,
			'offset' => 1
		));

		foreach( $prod_categories as $prod_cat ) :
			if ( $prod_cat->parent != 0 )
				continue;
			$cat_thumb_id = get_woocommerce_term_meta( $prod_cat->term_id, 'thumbnail_id', true );
			$cat_thumb_url = wp_get_attachment_image_src( $cat_thumb_id, 'thumbnail-size' )[0];
			$term_link = get_term_link( $prod_cat, 'product_cat' );
			?>

			<div class="tuxedo">
				<div class="overlay"></div>
				<img src="<?php echo $cat_thumb_url; ?>" alt="cat-img" />
				<div class="info-top">
					<h3><a class="button" href="<?php echo $term_link; ?>"> <?php echo $prod_cat->name; ?> </a></h3>
					<p><?php echo $prod_cat->description; ?></p>
					<a class="content-btn"  href="<?php echo $term_link; ?>">
						take a look
					</a>
				</div>
			</div>


		<?php endforeach;
		wp_reset_query();

		?>
	</div>
	<div class="grid-item grid-item--width3 grid-item--height3">
		<?php
		$taxonomyName = "product_cat";
		$prod_categories = get_terms($taxonomyName, array(
			'orderby'=> 'id',
			'order' => 'ASC',
			'hide_empty' => 1,
			'number' => 1,
			'offset' => 2
		));

		foreach( $prod_categories as $prod_cat ) :
			if ( $prod_cat->parent != 0 )
				continue;
			$cat_thumb_id = get_woocommerce_term_meta( $prod_cat->term_id, 'thumbnail_id', true );
			$cat_thumb_url = wp_get_attachment_image_src( $cat_thumb_id, 'thumbnail-size' )[0];
			$term_link = get_term_link( $prod_cat, 'product_cat' );
			?>

			<div class="sweater">
				<div class="overlay"></div>
				<img src="<?php echo $cat_thumb_url; ?>" alt="cat-img" />
				<div class="info-cat">
					<h3><a class="button" href="<?php echo $term_link; ?>"> <?php echo $prod_cat->name; ?> </a></h3>
					<p><?php echo $prod_cat->description; ?></p>
					<a class="content-btn"  href="<?php echo $term_link; ?>">
						take a look
					</a>
				</div>
			</div>
		<?php endforeach;
		wp_reset_query();

		?>
	</div>
	<div class="grid-item grid-item--width4 grid-item--height4">
		<?php
		$taxonomyName = "product_cat";
		$prod_categories = get_terms($taxonomyName, array(
			'orderby'=> 'id',
			'order' => 'ASC',
			'hide_empty' => 1,
			'number' => 1,
			'offset' => 3
		));

		foreach( $prod_categories as $prod_cat ) :
			if ( $prod_cat->parent != 0 )
				continue;
			$cat_thumb_id = get_woocommerce_term_meta( $prod_cat->term_id, 'thumbnail_id', true );
			$cat_thumb_url = wp_get_attachment_image_src( $cat_thumb_id, 'thumbnail-size' )[0];
			$term_link = get_term_link( $prod_cat, 'product_cat' );
			?>

			<div class="shoes">
				<div class="overlay"></div>
				<img src="<?php echo $cat_thumb_url; ?>" alt="cat-img" />
				<div class="info-min">
					<a class="button" href="<?php echo $term_link; ?>">
						<h5><?php echo $prod_cat->description; ?></h5>
						<div class="arrow-right"><img src="<?php echo home_url('/wp-content/themes/shop/', 'http');?>img/arrow-right.png" alt=""></div>
					</a>


				</div>
			</div>
		<?php endforeach;
		wp_reset_query();

		?>
	</div>
	<div class="grid-item grid-item--width4 grid-item--height3">
		<?php
		$taxonomyName = "product_cat";
		$prod_categories = get_terms($taxonomyName, array(
			'orderby'=> 'id',
			'order' => 'ASC',
			'hide_empty' => 1,
			'number' => 1,
			'offset' => 4
		));

		foreach( $prod_categories as $prod_cat ) :
			if ( $prod_cat->parent != 0 )
				continue;
			$cat_thumb_id = get_woocommerce_term_meta( $prod_cat->term_id, 'thumbnail_id', true );
			$cat_thumb_url = wp_get_attachment_image_src( $cat_thumb_id, 'thumbnail-size' )[0];
			$term_link = get_term_link( $prod_cat, 'product_cat' );
			?>

			<div class="glasses">
				<div class="overlay"></div>
				<img src="<?php echo $cat_thumb_url; ?>" alt="cat-img" />
				<div class="info-min">
					<a class="button" href="<?php echo $term_link; ?>">
						<h5><?php echo $prod_cat->description; ?></h5>
						<div class="arrow-right"><img src="<?php echo home_url('/wp-content/themes/shop/', 'http');?>img/arrow-right.png" alt=""></div>
					</a>


				</div>
			</div>
		<?php endforeach;
		wp_reset_query();

		?>
	</div>
	<div class="grid-item grid-item--width5 grid-item--height3">
		<?php
		$taxonomyName = "product_cat";
		$prod_categories = get_terms($taxonomyName, array(
			'orderby'=> 'id',
			'order' => 'ASC',
			'hide_empty' => 1,
			'number' => 1,
			'offset' => 5
		));

		foreach( $prod_categories as $prod_cat ) :
			if ( $prod_cat->parent != 0 )
				continue;
			$cat_thumb_id = get_woocommerce_term_meta( $prod_cat->term_id, 'thumbnail_id', true );
			$cat_thumb_url = wp_get_attachment_image_src( $cat_thumb_id, 'thumbnail-size' )[0];
			$term_link = get_term_link( $prod_cat, 'product_cat' );
			?>

			<div class="t-shirt">
				<div class="overlay"></div>
				<img src="<?php echo $cat_thumb_url; ?>" alt="cat-img" />
				<div class="info-top">
					<h3><a class="button" href="<?php echo $term_link; ?>"> <?php echo $prod_cat->description; ?> </a></h3>
					<a class="content-btn"  href="<?php echo $term_link; ?>">
						shop now
					</a>
				</div>
			</div>


		<?php endforeach;
		wp_reset_query();

		?>
	</div>
	<div class="grid-item grid-item--width4 grid-item--height3">
		<?php
		$taxonomyName = "product_cat";
		$prod_categories = get_terms($taxonomyName, array(
			'orderby'=> 'id',
			'order' => 'ASC',
			'hide_empty' => 1,
			'number' => 1,
			'offset' => 6
		));

		foreach( $prod_categories as $prod_cat ) :
			if ( $prod_cat->parent != 0 )
				continue;
			$cat_thumb_id = get_woocommerce_term_meta( $prod_cat->term_id, 'thumbnail_id', true );
			$cat_thumb_url = wp_get_attachment_image_src( $cat_thumb_id, 'thumbnail-size' )[0];
			$term_link = get_term_link( $prod_cat, 'product_cat' );
			?>

			<div class="watches">
				<div class="overlay"></div>
				<img src="<?php echo $cat_thumb_url; ?>" alt="cat-img" />
				<div class="info-min">
					<a class="button" href="<?php echo $term_link; ?>">
						<h5><?php echo $prod_cat->description; ?></h5>
						<div class="arrow-right"><img src="<?php echo home_url('/wp-content/themes/shop/', 'http');?>img/arrow-right.png" alt=""></div>
					</a>


				</div>
			</div>
		<?php endforeach;
		wp_reset_query();

		?>
	</div>
</div>
</div>



<div class="container">
	<div class="row">
		<div class="sec-spesial">
			<h2>Spesial Offers</h2>
			<div class="grid">
				<div class="grid-item grid-item--width6 grid-item--height6">
					<div class="spesial1">

<!--								--><?php
//								$args = array(
//									'post_type' => 'product',
//									'stock' => 1,
//									'posts_per_page' => 1,
//									'orderby' =>'date',
//									'order' => 'DESC'
//								);
//
//								$loop = new WP_Query( $args );
//								while ( $loop->have_posts() ) : $loop->the_post();
//									global $product;
//									?>
<!---->
<!--										<a id="id---><?php //the_id(); ?><!--" href="--><?php //the_permalink(); ?><!--" title="--><?php //the_title(); ?><!--">-->
<!--											--><?php //if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); else echo '<img src="'.woocommerce_placeholder_img_src().'" alt="Placeholder" width="220px" height="210px" />'; ?>
<!--											<h3>--><?php //the_title(); ?><!--</h3>-->
<!--											<span class="price">--><?php //echo $product->get_price_html(); ?><!--</span>-->
<!--										</a>-->
<!--										--><?php //woocommerce_template_loop_add_to_cart( $loop->post, $product ); ?>
<!---->
<!--								--><?php //endwhile; ?>
<!--								--><?php //wp_reset_query(); ?>
<!---->
<!--						--><?php


//						$featured_query = new WP_Query( $args );
//
//						if ($featured_query->have_posts()) :
//
//							while ($featured_query->have_posts()) :
//
//								$featured_query->the_post();
//
//								$product = get_product( $featured_query->post->ID );  ?>
<!---->
<!--								--><?php
//
//								?>
<!---->
<!---->
<!--							--><?php //endwhile; ?>
<!---->
<!--						--><?php //endif; ?>
<!---->
<!--						--><?php //wp_reset_query(); // Remember to reset
//						?>

						<div class="overlay2"></div>
						<div class="img-item1">
							<h3>new</h3>
						</div>
						<div class="bottom-item">
							<div>Lorem ipsum dolor <br> ONLY $50.00
							</div>
						</div>
					</div>
				</div>
				<div class="grid-item grid-item--width6 grid-item--height6">
					<div class="spesial1">
						<div class="overlay2"></div>
						<div class="img-item2">
							<h3>new</h3>
						</div>
						<div class="bottom-item">
							<div>Lorem ipsum dolor <br> ONLY $60.00
							</div>
						</div>
					</div>
				</div>
				<div class="grid-item grid-item--width6 grid-item--height6">
					<div class="spesial1">
						<div class="overlay2"></div>
						<div class="img-item3">
							<h3>new</h3>
						</div>
						<div class="bottom-item">
							<div>Lorem ipsum dolor <br> ONLY $23.30
							</div>
						</div>
					</div>
				</div>
				<div class="grid-item grid-item--width6 grid-item--height6">
					<div class="spesial1">
						<div class="overlay2"></div>
						<div class="img-item4">
							<h3>new</h3>
						</div>
						<div class="bottom-item">
							<div>Lorem ipsum dolor <br> ONLY $10.60
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>



</div>

<?php get_footer();?>