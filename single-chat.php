<?php get_header();
	while ( have_posts() ) : the_post();
?>

<div class="wrapper">
	<?php echo get_template_part('/template-parts/content', 'chat'); ?>
</div>

<?php
endwhile; ?>

<?php
get_footer();
