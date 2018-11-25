<html>
<head>
<title>ThaiCreate.Com Tutorial</title>
</head>
<body>
<?php
	if(copy($_FILES["filUpload"]["tmp_name"],"myfile/".$_FILES["filUpload"]["name"]))
	{
		echo "Copy/Upload Complete<br>";

		//*** Insert Record ***//
		$Host="localhost";
$UserName="root";
$Password="123456789";
$DatabaseName="db_login";
$Con=mysqli_connect($Host,$UserName,$Password,$DatabaseName)

//echo = $_POST['txtName'];
// $q ="INSERT INTO  files(Name,FilesName) VALUES ('".$_POST["txtName"]."','".$_FILES["filUpload"]["name"]."')";
// 		$strSQL = "INSERT INTO files ";
		
// 		$objQuery = mysql_query($Con,$strSQL);		
	//}
?>
<!-- //<a href="PageUploadToMySQL3.php">View files</a> -->
</body>
</html>