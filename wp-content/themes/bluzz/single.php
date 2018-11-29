<?php
	get_header();
		if ( have_posts() ) : while ( have_posts() ) : the_post();
			$n=0; if( have_rows('section') ): while ( have_rows('section') ) : $n++; the_row();
?>

	<div class="text-center">
		<h1><?php the_title(); ?></h1>
		<h2><?php the_sub_field('title');?></h2>
		<div class="line"></div>
	</div>
	<div class="row">
		<div class="large-12 columns"><?php the_sub_field('content');?></div>
	</div>
	<div class="clearfix"></div>
	<div class="h50"></div>

<?php
			endwhile; else : endif;
		endwhile; endif; 		
		$the_query = new WP_Query( 'page_id=2' ); while ($the_query -> have_posts()) : $the_query -> the_post();
?>
	<div class="gray text-center">
		<div class="row">
			<div class="boxcontent">
				<?php if( have_rows('home_box') ): while ( have_rows('home_box') ) : the_row(); ?>
					<a class="large-3 small-6 columns bulb" href="<?php the_sub_field('link') ?>">
						<br>
						<div><?php the_sub_field('icon'); ?></div>
						<br>
						<h2><?php the_sub_field('box_title'); ?></h2>
					</a>
				<?php endwhile; else : endif; ?>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="h50"></div>
	</div>

<?php
		endwhile;
	get_footer();
?>



