<?php
require '../pages/connection.php';


echo '<pre>';
print_r($_POST);
echo '</pre>';

foreach($_POST as $key => $value)
{
  $mykey = $key;

  //echo "$mykey<br/>$value";
  if ($mykey == "member_id")
  	$strMemberID= $value;
  if ($mykey == "first_name")
  	$strFirstName = $value;
  if ($mykey == "middle_name")
  	$strMiddleName = $value;
  if ($mykey == "last_name")
  	$strLastName = $value;
  if ($mykey == "email")
  	$strEmail = $value;
  else 
}
$stmt2 = $conn -> prepare("INSERT INTO Member(memberID,fName,mName,lName,email) 
								VALUES(:memberID,:firstname,:middlename,:lastname,:email)");
$stmt2->bindParam(':memberID',$strMemberID,PDO::PARAM_STR);
$stmt2->bindParam(':firstname',$strFirstName,PDO::PARAM_STR);
$stmt2->bindParam(':middlename',$strMiddleName,PDO::PARAM_STR);
$stmt2->bindParam(':lastname',$strLastName,PDO::PARAM_STR);
$stmt2->bindParam(':email',$strEmail,PDO::PARAM_STR);
$stmt2->execute();