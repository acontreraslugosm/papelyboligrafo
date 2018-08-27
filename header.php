<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<title>
				<?php if(is_front_page() || is_home()){
						echo get_bloginfo('name');
				} else{
						echo wp_title('');
				}?>
		</title>
		<meta charset="<?php bloginfo( 'charset' ) ?>" />
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="description" content="<?php bloginfo( 'description' ) ?>" />
		<?php get_template_part('templates/icons'); ?>
		<?php wp_head() ?>

	</head>

	<body <?php body_class() ?> itemscope itemtype="http://schema.org/WebPage">

		<?php
		do_action( 'before_main_content' );

		$slogan = get_option('theme_options_slogan');
		$logo_src = get_option('theme_options_logo_src');
		?>

		<header itemscope itemprop="http://www.schema.org/WPHeader" class="header-site">
			<div class="container">
				<div class="content-header-top">
					<div class="row">
						<div class="col-sm">
							
						</div>
						<div class="col-sm text-center">
							<span><?php echo $slogan; ?></span>
						</div>
						<div class="col-sm text-right">
							<?php get_template_part('templates/topbar-menu'); ?>
						</div>
					</div>
				</div>
				<div class="content-header">
					<div class="row align-self-center">
						<div class="col-sm">
							<a class="logo-header" href="<?php echo home_url(); ?>">
								<img src="<?php echo $logo_src; ?>" alt="logo" class="img-responsive">
							</a>
						</div>
						<div class="col-sm-6 text-center">
							<?php get_template_part('templates/header/search'); ?>
						</div>
						<div class="col-sm text-right">
							<?php get_template_part('templates/header/main-action'); ?>
						</div>
					</div>
				</div>
			</div>
			<div class="">
				<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarNavDropdown">
						<?php
						wp_nav_menu( array(
								'theme_location'  => 'main_menu',
								'depth'           => 2,
								'container'       => 'div',
								'container_class' => 'collapse navbar-collapse justify-content-center',
								'menu_class'      => 'nav navbar-nav',
								'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
								'walker'          => new WP_Bootstrap_Navwalker()
						) );
						?>
					</div>
				</nav>
			</div>
		</header>
