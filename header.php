<html lang="pt-br">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<link rel='stylesheet' id='gleam-fonts-css'  href='//fonts.googleapis.com/css?family=Open+Sans%3A400%2C400i%2C600%2C700%2C700i%7CCormorant%3A400%2C400i%2C500%2C600%2C700%2C700i' type='text/css' media='all' />
	<link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_uri() ); ?>" type="text/css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/css/all.css'; ?>" type="text/css" />
	<script src="<?php echo get_template_directory_uri() . '/js/custom.js'; ?>" async=""></script>
	<script src="<?php echo get_template_directory_uri() . '/js/all.js'; ?>" async=""></script>
	<?php wp_head(); ?>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel='dns-prefetch' href='//use.fontawesome.com' />
	<link rel='dns-prefetch' href='//fonts.googleapis.com' />

</head>
<body>
	<div id="menu-mask" class="menu-mask"></div>
	<div id="mobile-menu-holder" class="mobile-menu-holder">
		<div class="modal-menu-container">
			<div id="exit-mobile" class="exit-mobile"> 
				<span class="icon-bar1"></span> 
				<span class="icon-bar2"></span>
			</div>


			<?php if ( has_nav_menu( 'header-menu' ) ) {?>


				<?php wp_nav_menu(array('theme_location' => 'header-menu', 'container' => 'nav', 'menu_class' => 'menu-mobile', "menu_id" => "menu-my-menu")); ?>


			<?php } ?>
		</div>
		<div class="menu-contact">
			<ul>
				<li><i class="fas fa-map-marker-alt"></i><span><?php  echo get_theme_mod('endereco-set'); ?></span></li>
				<li><i class="fas fa-mobile-alt"></i><span><?php  echo get_theme_mod('telefone-set'); ?></span></li>
				<li><i class="far fa-envelope"></i><span><?php  echo get_theme_mod('email-set'); ?></span></li>
			</ul>
			<ul class="social-media">
				<li><a class="social-facebook" href="<?php  echo get_theme_mod('facebook-set'); ?>" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
				<li><a class="social-twitter" href="<?php  echo get_theme_mod('twitter-set'); ?>" target="_blank"><i class="fab fa-twitter"></i></a></li>
				<li><a class="social-instagram" href="<?php  echo get_theme_mod('instagram-set'); ?>" target="_blank"><i class="fab fa-instagram"></i></a></li>
			</ul>
		</div>
	</div>
	<header id="main-header" class="main-header header-1">
		<div class="container">
			<div class="header-container">
				<div class="logo logo-1 logo-white">
					<a href="/">
						<img src="<?php echo  get_template_directory_uri() . '/img/headers/Logo_negativo.png'; ?> " alt="">
<!--?php if ( function_exists( 'the_custom_logo' ) ) {
    the_custom_logo();
} ?--></a></div>
				<div class="logo logo-1 logo-dark"><a href="/"><img src="<?php echo  get_template_directory_uri() . '/img/headers/Logo_Sarah.png'; ?> " alt=""><!--?php if ( function_exists( 'the_custom_logo' ) ) {
    the_custom_logo();
} ?--></a></div>




<?php if ( has_nav_menu( 'header-menu' ) ) {?>


<?php wp_nav_menu(array('theme_location' => 'header-menu', 'container' => 'nav', 'container_class' => 'nav-holder nva-holder-1', 'menu_class' => 'menu-nav menu-nav-1')); ?>


<?php } ?>
				<div class="nav-button-holder"> 
					<button type="button" id="nav-button" class="nav-button"> 
						<span class="icon-bar"></span> 
					</button>
				</div>
				<ul class="social-media header-social-1">
					<li>
						<a class="social-facebook" href="<?php  echo get_theme_mod('facebook-set'); ?>" target="_blank">
							<i class="fab fa-facebook-f"></i>
						</a>
					</li>
					<li>
						<a class="social-facebook" href="<?php  echo get_theme_mod('twitter-set'); ?>" target="_blank">
							<i class="fab fa-twitter"></i>
						</a>
					</li>
					<li>
						<a class="social-facebook" href="<?php  echo get_theme_mod('instagram-set'); ?>" target="_blank">
							<i class="fab fa-instagram"></i>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</header>