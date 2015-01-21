<?php get_header(); ?>


<?php if (have_posts()) :  while (have_posts()) : the_post(); ?>

<div class="header-bandas" style="background-image:url(<?php $image_id = get_post_thumbnail_id(); $image_url = wp_get_attachment_image_src($image_id, true); echo $image_url[0];  ?>); no-repeat center center ; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;">
	
	<div class="contenido">
		<div class="celda">
			<h1><?php the_title(); ?></h1>
		</div>
	</div>
	
</div>



<div class="container-fluid">
		<div class="row contenido-single-bandas">
			<div class="col-md-12">
				<h4><?php the_excerpt(); ?></h4>
				<p> <?php the_content("Continue reading " . the_title('', '', false)); ?>
				</p>
			</div>
		</div>
	</div>
<div class="clearfix"></div>
	<?php endwhile;  else :  endif; ?>



<?php get_footer(); ?>