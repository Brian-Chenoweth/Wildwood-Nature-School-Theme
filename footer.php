<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wildwoodnature
 */

?>

	</div><!-- #content -->

	<div class="full-width">

	<img src="https://via.placeholder.com/1170x350.png?text=Contact+Form" alt="">

	</div>

	<footer class="site-footer">

		<div class="info-wrap">

			<div class="site-info">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/wildwood.png" alt="Wildwood Nature School" />

				<p class="theme-author">wildwoodnature, a custom theme by <a href="http://www.brianmchenoweth.com" class="author">Brian M Chenoweth</a></p>

				<p class="copyright">&copy; Copyright <?php echo date("Y"); ?> <strong>Wildwood Nature School</strong>, All Rights Reserved</p>

			</div> <!-- .site-info -->

			<div class="nap-info">

				<p>
					Wildwood Nature School<br/>
					Portland, OR 97231<br/>
					Phone: <a href="tel:406-656-6916">406 656 6916</a><br/>
					Email: <a href="mailto:nfravel@wildwoodnatureschool.com">nfravel@wildwoodnatureschool.com</a><br/>
				</p>

				<nav class="secondary-navigation">
					<?php
						wp_nav_menu( array(
							'menu'        => 'secondary',
						) );
					?>
				</nav><!-- #site-navigation -->

			</div>


		</div> <!-- .info-wrap -->

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="/wp-content/themes/wildwoodnature/bootstrap/js/bootstrap.min.js" crossorigin="anonymous"></script>

</body>
</html>
