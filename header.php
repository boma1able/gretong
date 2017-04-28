<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><? bloginfo();?></title>


	<?php wp_head();?>
</head>

<body <?php body_class(); ?>>

<div id="page-preloader" class="bg-preloader">
	<div class="wrapper">
		<img src="<?php echo home_url('/wp-content/themes/shop/', 'http');?>img/preload.gif" alt="">
	</div>
</div>

<section class="top-info">
	<div class="container">
		<div class="row">
			<div class="top-menu">
				<nav class="navbar navbar-info-top">
					<div class="container">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-menu" aria-expanded="false">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>

						<div class="collapse navbar-collapse" id="main-menu-top">
							<ul class="nav navbar-nav">
								<li><a href="#">Help</a></li>
								<li><a href="#">Contact</a></li>
								<li><a href="#">Delivery Information</a></li>
							</ul>
							<ul class="nav navbar-nav navbar-right">
								<li><a href="#"><span class="phone"><i class="fa fa-phone" aria-hidden="true"></i></span>Call us : 032 2352 782</a></li>
							</ul>
						</div>
					</div>
				</nav>
			</div>
		</div>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-md-6">
			<div class="logo">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo home_url('/wp-content/themes/shop/', 'http');?>img/logo.png" alt="logo"></a>
			</div>
		</div>
		<div class="col-md-6">
			<div class="div">
				<div class="login-menu">
					<div class="login">
						<button type="button" class="login-btn" data-toggle="modal" data-target="#myModal">
							login
						</button>
						<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<h4 class="modal-title" id="myModalLabel">Please login</h4>
									</div>
									<div class="modal-body">
											<?php wp_login_form( $args ); ?>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="register">
						<button type="button" class="reg-btn" data-toggle="modal" data-target="#myModal">
							register
						</button>
						<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<h4 class="modal-title" id="myModalLabel">Please login</h4>
									</div>
									<div class="modal-body">
										<?php wp_login_form( $args ); ?>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn" data-dismiss="modal">Close</button>
										<button type="button" class="btn">Login1</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>




				<div class="cart-top">
					<img src="<?php echo home_url('/wp-content/themes/shop/', 'http');?>img/cart.png" alt="cart">
					<a class="cart-contents" >My Cart (<?php echo sprintf ( _n( '%d', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?>) : <?php echo WC()->cart->get_cart_total(); ?></a>
					<a class="checkout-btn" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>" type="submit">CHECKOUT</a>
				</div>
			</div>

			<div class="search-header">
				<div class="search-form">
					<input type="search" placeholder="Search">
					<button class="src-btn" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
				</div>
			</div>

		</div>
	</div>
</div>

<nav class="navbar navbar-default">
	<div class="container">

			<?php
			wp_nav_menu( array(
				'theme_location'  => 'menu-cat',
				'menu'            => 'navbar navbar-default',
				'container'       => 'div',
				'container_class' => 'collapse navbar-collapse',
				'container_id'    => 'main-menu',
				'menu_class'      => 'nav navbar-nav',
				'menu_id'         => '',
				'echo'            => true,
				'fallback_cb'     => 'wp_page_menu',
				'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>'
			) );
			?>
	</div>
</nav>