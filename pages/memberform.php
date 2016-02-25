<?php
// Created at: Sublime Text 3
// Writer: Carlo Jumagdao
// Date: February 22, 2016
// Time: 4:14am
require 'banner.php';
require 'navigation.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Vote+ Create Form</title>
</head>
<body>
	<div id="content">
	      <div id="formBuilder"></div>
	</div>

	<script src="../assets/js/jquery/dist/jquery.min.js"></script>
	<script src="../assets/js/jquery/jquery-ui.min.js"></script>
	<script src="src/libraries/dust-js/dust-core-0.3.0.min.js"></script>
	<script src="src/libraries/dust-js/dust-full-0.3.0.min.js"></script>
	<script src="src/libraries/dust-js/dust-helpers.js"></script>
	<script src="src/libraries/tabs.jquery.js"></script>
	<script src="src/formBuilder.jquery.js"></script>

	<script>
	  $('#formBuilder').formBuilder({
	    load_url: 'src/json/example.json',
	    save_url: '../demo/save.php',
	    onSaveForm: function() {
	      window.location.href = '../demo/render.php';
	    }
	  });
	</script>
</body>
</html>
