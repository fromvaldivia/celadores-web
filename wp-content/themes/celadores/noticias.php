<?php
/*Template Name: Noticias */
?>

<?php get_header(); ?>

	    <div class="container-fluid">
	   
	    <div class="row">
	     <div id="titulo-categoria" class="col-md-12">
		    <h2>Noticias</h2>
		    <p>Una selecta colección con los mejores shows almacenados en Celadores</p>
	    </div>
	    
	    <div class="col-lg-9 col-md-12 col-sm-12">
		
		
		
		    
		<div id="column-width-demo2">
			<div class="grid-sizer"></div>
		
			
				<?php query_posts('cat=3'); if (have_posts()) :  while (have_posts()) : the_post(); ?>
				
							<!-- item -->			
							<div class="item">
							<div class="foto over" style="position:relative;">				
							<a href="<?php the_permalink(); ?>" class="over-post"></a>
							<div class="foto-post" style="background-image:url(<?php $image_id = get_post_thumbnail_id(); $image_url = wp_get_attachment_image_src($image_id, true); echo $image_url[0];  ?>); no-repeat center center ; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;"></div>
							</div>
							<div class="contenido-post">
								 <small><?php the_time('F j, Y') ?></small>
								 <h2><a href="<?php the_permalink(); ?>">Adelaida presenta su ultimo sencillo</a></h2>
								 <?php the_excerpt(); ?>
								 <a class="ver-mas" href="<?php the_permalink(); ?>">Ver más</a>
								 <ul class="tags">
									 <?php the_tags( '<li>', '</li><li>', '</li>' ); ?>										 
								 </ul>
							</div>
						</div>
						<!-- /item -->
				
					<?php endwhile; ?>
				
						<?php // Navigation ?>
				
					<?php else :  endif; wp_reset_query(); ?>
			
			
			
		</div>
	    </div>
		<?php get_sidebar();?>
			<div class="clearfix"></div>
	    </div><!-- row -->    
	    </div><!-- container -->

				

<?php get_footer(); ?>