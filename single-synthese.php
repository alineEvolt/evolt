<?php get_header(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="wrapper">
		<div class="flex-container-v">
			<div class="flex-item-center">

				<?php while ( have_posts() ) : the_post(); ?>

					<h1>
						N<?php echo __('New contact:', 'evolt'); ?> <?php the_field('nom_synthese'); ?>
						<span class="date"><?php echo __('Date:', 'evolt'); ?> <?php the_date(); ?></span>
					</h1>
					<div class="intro">
						<p><?php echo __('Hello, a new person has filled out the contact form.', 'evolt'); ?></p>
					</div>

					<ul class="names">
						<li><strong><?php echo __('Name:', 'evolt'); ?> </strong><?php the_field('nom_synthese'); ?></li>
						<li><strong><?php echo __('Email:', 'evolt'); ?> </strong><?php the_field('email_synthese'); ?></li>
					</ul>

					<div class="detail">
						<?php the_content(); ?>
					</div>

				<?php endwhile; ?>

			</div>
		</div>
	</div>
</article>

<?php get_footer();