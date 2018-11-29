<div class="text-center">
	<h1><?php the_title(); ?></h1>
	<div class="line"></div>
</div>
<?php $n=0; if( have_rows('section') ): while ( have_rows('section') ) : $n++; the_row(); ?>
	<div class="color">
		<div class="h100"></div>
		<div class="row">
			<div class="large-3 columns"><h2><?php the_sub_field('title');?></h2></div>
			<div class="large-9 columns">
				<?php the_sub_field('content');?>
				<div class="h50"></div>
				<?php $post_objects = get_sub_field('posts'); if( $post_objects ): ?>
					<?php foreach( $post_objects as $post): setup_postdata($post); ?>
						<a  class="large-4 columns end text-center bulb" href="<?php the_permalink(); ?>">
							<i class="fa fa-sun-o" aria-hidden="true"></i>
							<br>
							<br>
							<h1><?php the_title(); ?></h1>
						</a>
					<?php endforeach; ?>
				<?php wp_reset_postdata(); endif; ?>
			</div>
		</div>
		<div class="h100"></div>
	</div>
<?php endwhile;	else : endif; ?>


<?php $the_query = new WP_Query( 'page_id=2' ); while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
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
<?php endwhile;?>