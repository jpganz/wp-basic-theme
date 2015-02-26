<!DOCTYPE html>
<html>
	<head>	
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
   		<title>Test </title>
   		<script type="text/javascript" src="<myjs.js"></script>
   		<stype type="text/css" href="custom.css"></script>
  	</head>
  <body>
   <div id="header">		
	<?php wp_nav_menu( 	array(  'theme_location' => 'header-menu' ) 	); ?>
   </div>	