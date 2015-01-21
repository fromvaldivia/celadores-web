	    <div class="col-lg-3 col-md-12 col-sm-12 sidebar ">

			  
			    <div class="titulo"><h3>Random</h3></div>
			    <div class="widget">
				 	<ul>
					 	<?php query_posts('orderby=rand'); if (have_posts()) :  while (have_posts()) : the_post(); ?>

					 	<li>
						 	<div class="foto" style="background-image:url(<?php $image_id = get_post_thumbnail_id(); $image_url = wp_get_attachment_image_src($image_id, true); echo $image_url[0];  ?>); no-repeat center center ; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;"></div>
						 	<div class="contenido-random">
						 		<small><?php the_time('F j, Y') ?></small>
						 		<h4><?php the_title(); ?></h4>
						 	</div>
						 	<div class="clearfix"></div>
					 	</li>
					 	
					 	<?php endwhile; else :  endif; wp_reset_query(); ?>
					 	
					 	

				 	</ul>  
			    </div>
			    
			    <div class="titulo"><h3>Etiquetas</h3></div>
				

			    <div class="widget fecha">
					<ul class="tags">
						 <?php wp_tag_cloud('orderby=name&format=list'); ?>
						 <!--
<li><a href="">Noticias</a></li>
						 <li><a href="">Celadores F5</a></li>
						 <li><a href="">Los Planetas</a></li>
						 <li><a href="">Noticias</a></li>
						 <li><a href="">Electroinca</a></li>
						 <li><a href="">Musica</a></li>
						 <li><a href="">Familea Miranda</a></li>
						 <li><a href="">Electroinca</a></li>
						 <li><a href="">Musica</a></li>
						 <li><a href="">Noticias</a></li>
						 <li><a href="">Electroinca</a></li>
						 <li><a href="">Musica</a></li>
						 <li><a href="">Noticias</a></li>
						 <li><a href="">Electroinca</a></li>
-->
						 
						 <div class="clearfix"></div>
					 </ul>
					 
			    </div>

			    
			    <div class="titulo"><h3>Síguenos</h3></div>

			    <div class="widget fecha">
					<ul>
						<li class="facebook"><a href=""><i class="fa fa-facebook"></i></a></li>
						<li class="twitter"><a href=""><i class="fa fa-twitter"></i></a></li>
						<li class="soundcloud"><a href=""><i class="fa fa-soundcloud"></i></a></li>
						<li class="instagram"><a href=""><i class="fa fa-instagram"></i></a></li>
						<div class="clearfix"></div>				    

					</ul>
			    </div>
			    
			    
			    			    
			    
		    </div>