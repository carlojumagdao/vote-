<?php
require '../pages/connection.php';


echo '<pre>';
print_r($_POST);
echo '</pre>';


if(empty($_POST['member_id']) || empty($_POST['last_name']) || empty($_POST['email']) || empty($_POST['first_name'])){
	//error page here.
	echo "fill up all";

} else{
	$strMemberID= $_POST['member_id'];
	$strLastName= $_POST['last_name'];
	$strFirstName= $_POST['first_name'];
	$strEmail= $_POST['email'];
}

$stmt2 = $conn -> prepare("INSERT INTO Member(memberID,fName,mName,lName,email) 
								VALUES(:memberID,:firstname,:middlename,:lastname,:email)");
$stmt2->bindParam(':memberID',$strMemberID,PDO::PARAM_STR);
$stmt2->bindParam(':firstname',$strFirstName,PDO::PARAM_STR);
$stmt2->bindParam(':middlename',$strMiddleName,PDO::PARAM_STR);
$stmt2->bindParam(':lastname',$strLastName,PDO::PARAM_STR);
$stmt2->bindParam(':email',$strEmail,PDO::PARAM_STR);
$stmt2->execute();

$stmt3 = $conn -> prepare("INSERT INTO MemberDetail(memberID,fieldName,fieldData) 
							VALUES(:memberID,:fieldName,:fieldData)");
foreach ($_POST as $key => $value) {
	if($key == "member_id" || $key == "last_name" || $key == "first_name" || $key == "email"){

	} else{
		$strFieldName = $key;
		$strFieldData = $value;
		$stmt3->bindParam(':memberID',$strMemberID,PDO::PARAM_STR);
		$stmt3->bindParam(':fieldName',$strFieldName,PDO::PARAM_STR);
		$stmt3->bindParam(':fieldData',$strFieldData,PDO::PARAM_STR);
		$stmt3->execute();
	}
}
