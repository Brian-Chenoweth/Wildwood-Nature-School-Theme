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

        <?php echo do_shortcode(
            "[full-width]
                <div id='contact-us'>
                    <h2>Contact us to schedule a tour now!</h2>
                    <span class='glyphicon glyphicon-calendar' aria-hidden='true'></span>
                    <a class='btn secondary'>Contact</a>
                </div>    
            [/full-width]"
        ); ?>

        
        <?php echo do_shortcode("[get_recent_posts id='homepage-posts']"); ?>


        
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
?>