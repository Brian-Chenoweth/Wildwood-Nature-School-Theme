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



        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

        <?php ## echo do_shortcode("[my_content id='8']"); ?>

        <?php
            if( have_posts() ) {
                while( have_posts() ) {
                the_post();
                  the_content();
                }
              }
        ?>

        
        <?php echo do_shortcode("[get_recent_posts id='homepage-posts']"); ?>


        
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
?>