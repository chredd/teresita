<?php
return array(
	'date_format'    => 'd M, Y',   // Date format to be used in article page (not for routes)   
	'author_name'    => 'Chris', // Global author name 
	'site_name'      => 'Johanssonita',   // Site name (Global)
	'site_title'     => 'Amalita Teresita',  // Site default title (Global)
	'templates_path' => './templates',  // Path to templates
	'base_directory' => $app->request()->getRootUri()
);