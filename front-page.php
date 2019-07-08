<?php
/**

 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wildwoodnature
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

        <header>
            <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
        </header>

        <?php echo do_shortcode("[my_content id='8']"); ?>

        
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
