<section id="kundensegmente" class="boxcontent gray">
	<div class="h100"></div>
	<div class="row">
		<div class="large-12 columns text-center">
			<h1><?php the_field('offer_title'); ?></h1>
			<div class="line"></div>
			<?php the_field('offer_content'); ?>
		</div>
		<div class="clearfix"></div>
		<div class="h50"></div>
<!-- 
		<div class="offers text-center">
			<?php $i=0; if( have_rows('offer') ): while ( have_rows('offer') ) : $i++; the_row(); ?>
				<div class="medium-4 <?php if ($i==3) { echo "small-12"; } else { echo "small-6"; } ?> columns bulb">
					<?php the_sub_field('icon'); ?>
					<div class="h20"></div>
					<h3><?php the_sub_field('text'); ?></h3>
					<div class="h20"></div>
				</div>				
			<?php endwhile; else : endif; ?>
		</div>
		<div class="clearfix"></div>
		<div class="h50"></div>

 -->
 		<div class="advert">
			<br><br>
			<div class="large-11 large-centered columns">
				<ul class="tabs" data-tabs id="example-tabs">
					<?php $i=0; if( have_rows('details') ): while ( have_rows('details') ) : $i++; the_row(); ?>
						<li class="tabs-title <?php if ($i==1) { echo "is-active"; } ?>"><a href="#panel<?php echo $i; ?>" aria-selected="true"><?php the_sub_field('title'); ?></a></li>
					<?php endwhile; else : endif; ?>
					<!-- <li class="tabs-title"><a href="#panel10" aria-selected="false">Portfolio</a></li> -->
				</ul>
				<div class="tabs-content" data-tabs-content="example-tabs">
					<?php $i=0; if( have_rows('details') ): while ( have_rows('details') ) : $i++; the_row(); ?>
						<div class="tabs-panel <?php if ($i==1) { echo "is-active"; } ?>" id="panel<?php echo $i; ?>"><?php the_sub_field('content') ?></div>
					<?php endwhile; else : endif; ?>
					
					<div class="tabs-panel" id="panel10">
						<a class="fil-cat" data-rel="all">Alle</a>
						<a class="fil-cat" data-rel="eigenheimer">Eigenheimer</a>
						<a class="fil-cat" data-rel="gewerbe">Gewerbe</a>
						<a class="fil-cat" data-rel="offentliche">Öffentliche Bauten</a>
						<a class="fil-cat" data-rel="landwirtschaft">Landwirtschaft</a>
<!-- 						<div id="portfolio" data-equalizer>
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
									</span>
								</div>
							<?php endwhile; else : endif; ?>
						</div>
 -->
 					</div>

				</div>
			</div>
			<br><br>
		</div>
	</div>
	<div class="h50"></div>

<!-- 
	<section class="gray boxcontent text-center">
		<div class="row">
			<div class="large-12 columns">
				<p>Planen Sie Ihre Anlage und erfahren Sie in wenigen Minuten, ob sich eine Solarstromanlage oder ein Batteriespeicher für Sie persönlich rechnet. Dabei können Sie Ihre zukünftige Anlage gleich schon einmal digital erleben</p>
				<div class="h50"></div>
				<a href="<?php the_permalink(221); ?>" class="button">Solarrechner</a>
				<div class="h50"></div>
				<div class="row">
					<div class="medium-8 medium-centered columns">
						<img src="<?php echo esc_url(home_url('/')); ?>/wp-content/uploads/2017/11/img-backAsset-1.png" alt="">
					</div>
				</div>
				<div class="h50"></div>
			</div>
			<div class="clearfix"></div>
			<div class="h50"></div>
		</div>
	</section>
 -->

<!-- 
	<div class="long">
		<div class="row text-center">
			<div class="large-8 columns">
				<h3><?php the_field('call_to_action'); ?></h3>
			</div>
			<div class="large-4 columns">
				<a href="mailto:andrei@andrei.ro">ANFRAGE STELLEN</a>
			</div>
		</div>
	</div>
-->
</section>