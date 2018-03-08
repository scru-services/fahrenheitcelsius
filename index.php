<?php

		// include the domain information from the root dir
		require '../../inc/browscap.php';
		require '../../inc/domain.php';
		require '../../inc/projects.php';

		// include the project_data from the project dir
		// check this data if you setup a new project
		require 'inc/project_data.php';

		// include the header from the root dir
		require '../../inc/header.php';

?>

	<!-- scru-service start -->

	<div class="result-container">

		<h4>Fahrenheit</h4>

		<input id="fahrenheit" class="result" type="number" name="fahrenheit" value="0" onclick="document.execCommand('selectAll',false,null)">

	</div><!-- .result.fahrenheit -->

	<div class="result-container">

		<h4>Celsius</h4>

		<input id="celsius" class="result" type="number" name="celsius" value="" onclick="document.execCommand('selectAll',false,null)">

	</div><!-- .result.celsius -->

	<!-- scru-service end -->

<?php

	// include the domain information from the root dir
	require '../../inc/footer.php';

?>
