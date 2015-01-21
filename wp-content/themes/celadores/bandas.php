<?php
/*Template Name: Bandas*/
?>
<?php get_header(); ?>
	    <div class="container-fluid">
	   
	    <div class="row">
	     <div id="titulo-categoria" class="col-md-12">
		    <h2><?php the_title(); ?></h2>
		    <p>Una selecta colección con los mejores shows almacenados en Celadores</p>
	    </div>
	    <?php query_posts( 'cat=2' ); if (have_posts()) :  while (have_posts()) : the_post(); ?>
	    
	    <div class="bandas-square" style="background-image:url(<?php $image_id = get_post_thumbnail_id(); $image_url = wp_get_attachment_image_src($image_id, true); echo $image_url[0];  ?>); no-repeat center center ; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;">
	    	<div class="content over">
	    		<a href="<?php the_permalink(); ?>" class="table">
	    			<div class="table-cell"><h1><?php the_title(); ?></h1></div>
	    		</a>
				<a href="<?php the_permalink(); ?>" class="over-post"></a>

	    	</div>

	    </div>
	    	    
	    <?php endwhile;  else :  endif; wp_reset_query();?>
	    
	   
			<div class="clearfix"></div>
	    </div><!-- row -->    
	    </div><!-- container -->
<div class="soundcloud-row" data-stellar-background-ratio="0.5">
			<div class="info">
				<i class="fa fa-soundcloud"></i>
				<h2>Conoce las bandas que son parte de Celadores en nuestro Soundcloud</h2>
				<a class="btn btn-default btn-large" href="">Celadoresrecs -  Soundcloud</a>
			</div>
		</div>
				
<?php get_footer(); ?>