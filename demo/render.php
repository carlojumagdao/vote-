<?php

require 'readform.php';
require '../pages/connection.php';

session_start();

$form_data = isset($_SESSION['form_data']) ? $_SESSION['form_data'] : FALSE;
unset($_SESSION['form_data']);

if( !$form_data ) {
	header( 'Location: /' ) ;
}
$loader = new formLoader($form_data, 'demo/submit.php');
$arrFieldNames = $loader->render_form();

$stmt1 = $conn -> prepare("INSERT INTO MemberForm(MemForm) 
								VALUES(:form)");
$stmt1->bindParam(':form',$form_data,PDO::PARAM_STR);
$stmt1->execute();

$stmt2 = $conn -> prepare("INSERT INTO DynamicField(fieldName) 
								VALUES(:fieldname)");

foreach ($arrFieldNames as $fieldname) {

	echo "$fieldname";
	if($fieldname == "first_name" || $fieldname == "last_name" || $fieldname == "email" || $fieldname == "middle_name" || $fieldname == "member_id"){
		echo "equals to default";

	} else {
			$stmt2->bindParam(':fieldname',$fieldname,PDO::PARAM_STR);
			$stmt2->execute();
	}	
}


?>
