<?php 
	get_header(); 
?>
	<div id="content">
		<h1>Pagina</h1>
		<div class="contenido">
			
			
			<div style="clear:both;"></div>
			<?php 
			if (have_posts()) {
			  while (have_posts()) {
			    the_post();
			    the_content(); 
			  }
			} ?>	 
			?>
		</div><!-- /contenido -->
    </div><!-- /content -->
