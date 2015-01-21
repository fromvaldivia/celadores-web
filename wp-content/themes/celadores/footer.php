<?php wp_footer(); ?>
		<footer>
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-8">
						<h4>Media Partners</h4>
					</div>
					<div class="col-md-5">
					<h4>Celadores Recs. 2015 - Todos los derechos reservados</h4>
					<small>info@celadores.me</small><br>
					<small>Organización basada en intenciones colectivas que desde el 2011 tiene como objetivo promover la música independiente</small>
						
					</div>
					<div class="col-md-4">
					<h4>Síguenos</h4>
						<ul class="nav navbar-nav navbar-right">
            <li><a href="https://www.facebook.com/celadoresrecs" target="_blank"><i class="fa fa-facebook"></i></a></li>
            <li><a href="https://twitter.com/celadoresrecs" target="_blank"><i class="fa fa-twitter"></i></a></li>
            <li><a href="https://instagram.com/celadoresrecs" target="_blank"><i class="fa fa-instagram"></i></a></li>
            <li><a href="https://soundcloud.com/celadoresrecs" target="_blank"><i class="fa fa-soundcloud"></i></a></li>

            </ul></div>
					
										
				</div>
			</div>
		</footer>

		  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/stellar.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/masonry.js"></script>

    <script charset="utf-8" type="text/javascript">
    	var w = $(window).width();
    	var h = $(window).height();
    	
    	$(window).load(function(){
	    	$('.carga').fadeOut(function(){
		    	$('.logo-carga').delay(500).fadeOut();
	    	});

			var $container = $('#column-width-demo2');
				// init
				$container.packery({
				  itemSelector: '.item'
				});
    	});
    	
    	$(document).ready(function() { 
    		
    		
    	
    		if(w < 1330){
	    	
	    	$('.columna-izquierda , .columna-derecha').css({'height':(h)-150+'px'});

    		}else if(w < 768){
	    	
	    	$('.columna-izquierda').css({'height':(h)-250+'px'});

    		}else{
    		
    		$('.columna-izquierda , .columna-derecha').css({'height':(h)-150+'px'});
    		
    		}
    	    	
    	    	$('.over').hover(function() {
	    		$(this).children('.over-post').stop(1,0).animate({'opacity':0},200);
				}, function() {  
	    		$('.over-post').stop(1,0).animate({'opacity':1},200);
				});
				$('.item').hover(function() {
	    		$('.foto-post').children('.over-post').stop(1,0).animate({'opacity':0},200);
				}, function() {  
	    		$('.foto-post').stop(1,0).animate({'opacity':1},200);
				});

				
				
			$.stellar({
				horizontalScrolling: false,
				verticalOffset:100
			});	
			
			$('.link-contacto').click(function(){
				$('.contacto').fadeIn();
				$('.contacto').click(function(){
					$('.contacto').fadeOut();
				});
			});	
			
			
			
    		
    	 });
    	 
    	 $(window).resize(function() {
	    	 if(w < 1330){
		    	 $('.columna-izquierda , .columna-derecha').css({'height':(h)-50+'px'});
		    	 }else{
    		$('.columna-izquierda , .columna-derecha').css({'height':(h)-250+'px'});
    		}
    	  });
    	
    	
    </script>	

  
  </body>
</html>
