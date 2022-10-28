<?php get_header(); ?>
<div class="container mt-4">
	<div class="row">
		<div class="col-sm-8 blog-main">

			<?php
			if (have_posts()) {
				while (have_posts()) : the_post();
			?>
					<div class="blog-post">
						<h1><?php the_title(); ?></h1>
						<p class="blog-post-meta"><?php the_date(); ?> por <?php the_author(); ?></p>
						<?php the_content(); ?>
					</div><!-- /.blog-post -->

					<?php echo get_the_excerpt(); ?>

			<?php
				endwhile;
			}
			?>



			<nav>
				<ul class="pager">
					<li><?php next_posts_link('Previous'); ?></li>
					<li><?php previous_posts_link('Next'); ?></li>
				</ul>
			</nav>
		</div><!-- /.blog-main -->
		<div class="col-3">
			<?php get_sidebar(); ?>
		</div>
	</div>
</div>


<?php get_footer(); ?>