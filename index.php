<?php

	/*
		Uitleg over autoloader kan op de volgende site gevonden worden: \
		https://phpenthusiast.com/blog/how-to-autoload-with-composer
	*/
		require "vendor/autoload.php";
		require "config.php"; // all settings like paths and DB
		use Helper\Htmlhelper;
		use Helper\Routehelper;


		// get the path 
		$Routehelper = new Routehelper();
		$ViewPath =  $Routehelper->get_route();


		//display template 
		$Htmlhelper = new Htmlhelper();
		$html = $Htmlhelper->template($ViewPath);


		echo $html;

