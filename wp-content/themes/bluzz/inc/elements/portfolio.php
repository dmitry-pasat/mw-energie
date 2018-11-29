<div id="portfolio"></div>
<section class="boxcontent text-center gray">
	<div class="h100"></div>
	<div class="row">
		<div class="large-12 columns">
			<h1><?php the_field('portfolio_title'); ?></h1>
			<div class="line"></div>
			<?php the_field('portfolio_content') ?>
		</div>
	</div>
	<a class="fil-cat" data-rel="all">Alle</a>
	<a class="fil-cat" data-rel="eigenheimer">Eigenheimer</a>
	<a class="fil-cat" data-rel="gewerbe">Gewerbe</a>
	<a class="fil-cat" data-rel="offentliche">Öffentliche Bauten</a>
	<a class="fil-cat" data-rel="landwirtschaft">Landwirtschaft</a>
	<div id="portfolio" data-equalizer>
		<?php if( have_rows('portofoliu') ): while ( have_rows('portofoliu') ) : the_row(); ?>
			<?php
				$image = get_sub_field('image'); if( !empty($image) ):
				$clas = get_sub_field( 'category' );
				$clas = array_map('sanitize_title', $clas);
				$clas = implode(' ', $clas );
			 ?>
			<div class="large-3 small-6 columns end scale-anm home-box <?php echo $clas; ?> all more" style="background-image: url('<?php echo $image['url']; ?>')" data-equalizer-watch>
				<?php endif; ?>
				<span class="over mobilenone">
					<br>
					<h1><?php the_sub_field('title'); ?></h1>
					<!-- <p><?php echo $clas; ?></p> -->
				</span>
			</div>
		<?php endwhile; else : endif; ?>
	</div>
	<div class="clearfix"></div>
	<br><br>
	<!-- <a href="#" id="loadMore">Load More</a> -->
	<div class="h100"></div>
</section>