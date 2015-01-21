<?php get_header(); ?>
<?php if (have_posts()) :  while (have_posts()) : the_post(); ?>

<div class="container">
	<div class="row single-row">
		<div class="imagen-single" style="background-image:url(<?php $image_id = get_post_thumbnail_id(); $image_url = wp_get_attachment_image_src($image_id, true); echo $image_url[0];  ?>); no-repeat center center ; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;"></div>
	</div>
	<div class="header-post">
		<h2><?php the_title(); ?></h2>
		<small><?php the_time('F j, Y') ?> por <?php the_author() ?></small>
		<ul class="tags" style="padding:20px 0;">
			<?php the_tags( '<li>', '</li><li>', '</li>' ); ?>										 
			
			<div class="clearfix"></div>
		</ul>
	</div>
	<div class="contenido-single">
		<p>
				<h4><?php the_excerpt(); ?></h4>
			<?php the_content("Continue reading " . the_title('', '', false)); ?>
		
		</p>
	</div>
	<div class="clearfix"></div>
</div>
	<?php endwhile; else :  endif; ?>

<div class="container-fluid">
	<div class="row">
			    <div class="clearfix"></div>
			    
		
			    
			    
			    
			    <div class="col-md-4 box-publicacion over" style="background: url(https://fbexternal-a.akamaihd.net/safe_image.php?d=AQA66Yv8N8FysqqQ&w=484&h=253&url=https%3A%2F%2Fi1.sndcdn.com%2Fartworks-000102624623-y9apow-t500x500.jpg&cfs=1) no-repeat center center ; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover;
	background-size: cover;">
					<div class="tag-box">Shows</div>
					<a class="link-post" href=""></a>
					<div class="over-post"></div>
				    <div class="info-publicacion gradiente">
					    <h3><a href="">Título de la publicación que puede ser muy larga</a></h3>
						<small>Enero 12, 2015</small>

				    </div>
				   
			    
			    </div>
			    
			    
			    <div class="col-md-4 box-publicacion over" style="background: url(http://www.ashgale.com/wp-content/themes/ash/assets/img/ash_shows.jpg) no-repeat center center ; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover;
	background-size: cover;">
					<div class="over-post"></div>
					<a class="link-post" href=""></a>
				    <div class="info-publicacion">
					    <h3><a href="" >Título de la publicación</a></h3>
						<small>Enero 12, 2015</small>

				    </div>
				    <div class="tag-box">Shows</div>
			    </div>



				<div class="col-md-4 over box-publicacion" style="background: url(https://fbcdn-sphotos-a-a.akamaihd.net/hphotos-ak-xap1/v/t1.0-9/p320x320/10888950_407727972722988_8374800500797228582_n.jpg?oh=15c86b241b9e5ad3d0f533be6f4d8970&oe=5536419D&__gda__=1428636099_d7f699e161a90cb4c18dc0873f8b15f1) no-repeat center center ; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover;
	background-size: cover;">
					<div class="over-post"></div>
					<a class="link-post" href=""></a>
				    <div class="info-publicacion">
					    <h3><a href="">Título de la publicación</a></h3>
						<small>Enero 12, 2015</small>
				    </div>
				    <div class="tag-box">Shows</div>
			    </div>

		    </div>

</div>

<?php get_footer(); ?>