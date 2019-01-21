<!-- front page -->
<?php get_header('front'); ?>


			<div id="content">

				<div id="inner-content" class="wrap row">

						<main id="main" class="col-xs-12" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class( ' single-post' ); ?> role="article">

								<section class="entry-content flex flex--row flex--row_collapse">
									<div class="col-xs-12 col-md-7 message"><?php the_field('petition'); ?></div>
									<div class="col-xs-12 col-md-5 petition">
										<?php the_field('petition_cta'); ?>
										<?php the_content(); ?>
										<br />
										<strong>Join Your Neighbors:</strong>
										<?php $signature_list = get_field('signature_list'); echo do_shortcode($signature_list); ?>
										<?php $signature_count = get_field('signature_count'); echo do_shortcode($signature_count); ?>
										<?php $signature_goal = get_field('signature_goal'); echo do_shortcode($signature_goal); ?>

									</div>
								</section>

							</article>

							<?php endwhile; ?>

									<?php starter_page_navi(); ?>

							<?php else : endif; ?>


						</main>

				</div>

			</div>

<?php get_footer(); ?>
