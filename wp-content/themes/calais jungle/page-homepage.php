<?php get_header(); ?>
	
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<!-- Example only -->
		<section class="page-description">
			<div class="grid-container">
				<div class="col-6">
					<div class="description-holder">
						<h3><?php the_title(); ?></h3>
						<?php echo wpautop( $post->post_content ); ?>
					</div>
				</div>
			</div>
		</section>
		<section class="video-full">
			<div class="embetter" data-vimeo-id="205222291"><a href="https://vimeo.com/205222291" target="_blank"><img src="https://i.vimeocdn.com/video/619929823_640.jpg"></a></div>
		</section>



	<?php endwhile; ?>
	<?php else : ?>

		<!-- No post for that query -->

	<?php endif; ?>

<?php get_footer(); ?>
