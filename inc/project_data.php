<?php

	$project_id = 4; // same for all languages
	$project_lang =  'en';

	$project_name = $projects[$project_id][$project_lang]['title']; // case sensitive for <title> and <h1> tag
	$project_dir = 'projects/'.$projects[$project_id][$project_lang]['slug'].'/';

	$project_subdomain = get_subdomain($projects[$project_id][$project_lang]['slug']);

	$project_desc_title = 'Convert Fahrenheit to Celsius to Fahrenheit like a charm'; // goes into a <h2> element
	$project_desc = 'The Convert Fahrenheit to Celsius service converts Fahrenheit to Celsius to Fahrenheit.'; // goes into a <p> element, no html

	$project_referrals = [1,2,3,5,6];

	// keywords for this project
	$project_keywords = array('fahrenheit', 'celsius', 'converter', 'temperature');

	// scripts for this project, the order matters
	$project_scripts = array(
		'js/vendors/jquery.min.js',			// jquery root dir
		'js/magic.min.js', 							// javascript project dir
	);

?>
