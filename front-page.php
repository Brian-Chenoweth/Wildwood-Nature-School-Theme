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

        <?php echo do_shortcode("[homepage-banner]"); ?>

        <?php echo do_shortcode("[homepage-programs]"); ?>

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