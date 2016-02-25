<?php
	require 'banner.php';
	require 'navigation.php';
	require 'connection.php';
	require '../loaders/php/formLoader.php';

	$formResult = $conn -> query(" SELECT * FROM MemberForm");
	$formData = $formResult -> fetchAll();

	foreach ($formData as $form) {
		$data = $form['MemForm'];
	}
	$loader = new formLoader($data, '../demo/submit.php');

	//Getting the latest code of member and pass it to form loader
	$strLatestMemResult = $conn -> query(" SELECT memberID FROM Member");
	$strLatestMemData = $strLatestMemResult -> fetchAll();
	foreach ($strLatestMemData as $strLatestMemCode) {
		$strCode = $strLatestMemCode['memberID'];
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Vote+ Add Member</title>
	<link type="text/css" rel="stylesheet" href="../assets/css/materialize.min.css"  media="screen,projection"/>
	<link rel="stylesheet" type="text/css" href="../assets/css/style.css" media="screen,projection"/>
</head>
<body>
	<div id="content">
		<div class="col s6" style="margin:7% 7% 7% 7%;">
			<?php $loader->render_form($strCode); ?>
		</div>
	</div>
</body>
</html>