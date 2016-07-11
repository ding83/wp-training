<?php
/**
 * The template for the sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<?php if ( is_active_sidebar( 'sidebar-1' )  ) : ?>
	<aside id="secondary" class="sidebar widget-area" role="complementary">
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
		<section class="widget">
			<h2>Students</h2>
			<ul>
				<?php
					$args = array('post_type' => 'students', 'post_status' => 'publish', 'posts_per_page' => 5);
					$loop = new WP_Query( $args );

					while ( $loop->have_posts() ) : $loop->the_post();
				?>
				<li><?php the_title( '<a href="'.get_permalink().'" title="'.the_title_attribute( 'echo=0' ).'" rel="bookmark">', '</a>' ); ?></li>
				<?php endwhile; ?>
			</ul>
		</section>
	</aside><!-- .sidebar .widget-area -->
<?php endif; ?>
