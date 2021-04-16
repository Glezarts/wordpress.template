<?php /* Template Name: Главная */ get_header(); ?>

<?php while (have_posts()) : the_post(); ?>


    <?php the_content(); ?>


  <?php endwhile; ?>
	
	

<?php if( get_field('viseble_block') ): ?>
	

	<?php $header_img = get_field('header_img'); ?>

	<img src="<?php echo $header_img['url']; ?>" alt="<?php echo $header_img['alt']; ?>" />
		<?php the_field('text_info'); ?>
	
<?php endif; ?>
<?php if( have_rows('social_links') ): ?>

	<ul class="links">

	<?php while( have_rows('social_links') ): the_row(); 

		// vars
		$text = get_sub_field('text');
		$class = get_sub_field('class');
		$link = get_sub_field('link');

		?>

		<li class="slide">
			<a href="<?php echo $link; ?>" class="sprites ico-<?php echo $class; ?>"> <?php echo $text; ?></a>
		   
		</li>
	<?php endwhile; ?>

	</ul>

<?php endif; ?>


link





<?php get_footer(); ?>

