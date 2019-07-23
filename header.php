<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wildwoodnature
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
	
<link rel="stylesheet" href="/wp-content/themes/wildwoodnature/bootstrap/css/bootstrap.min.css" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">

<?php require_once( ( get_template_directory() ). '/inc/schema.php' ); ?>


</head>

<body class="container" <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'wildwoodnature' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">


		<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/wildwood.png" alt="Wildwood Nature School" />

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'wildwoodnature' ); ?></button>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
		</nav><!-- #site-navigation -->

		
		</div><!-- .site-branding -->

	</header><!-- #masthead -->

	<div id="content" class="site-content">
