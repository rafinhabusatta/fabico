<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package starter-theme
 */

get_header();
?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">
		<div class="container-fluid">
			<div class="row bg-header">
				<div class="col-12 top-header ">
					<h1 class="text-center mb-4 text-uppercase"><?php single_post_title(); ?></h1>
					<p class="text-justify">
					<?php 
							// if (have_posts()) :
							// 	the_post();
								
							// 	endfor;
						 	// endif;// End of the loop. 
						?>
					</p>
				</div>
			</div>
			<div class="row mx-0 mt-3">
				<div class="col-3 d-none d-lg-block mt-5">
					<?php get_sidebar(); ?>
				</div>
				<div class="col-12 col-lg-9">
					<?php
					if (have_posts()) :
						/* Start the Loop */
						while (have_posts()) :
							the_post();
					?>
							<div class="row teste">
								<div class="col-12 teste">
									<?php
									get_template_part('template-parts/content', 'page',array(
										'post_type'      => 'post',
										'cat'            => '22,47,67',
										'orderby'        => 'name',
										'order'          => 'ASC',
										'hide_empty'     => 1,
										'depth'          => 1,
										'posts_per_page' => 1
										));
									?>
								</div>
							</div>
					<?php
						endwhile; // End of the loop.
					else :
						get_template_part('template-parts/content', 'none', array(
							'before' => '<div class="page-links">' . esc_html__('Pages:', 'starter-theme'),
							'after'  => '</div>',
						));
					endif;
					// If comments are open or we have at least one comment, load up the comment template.
					if (comments_open() || get_comments_number()) :
						comments_template();
					endif;
					?>
				</div>
			</div>
		</div>
	</main><!-- #main -->
</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();
