<meta charset="UTF-8">
<?php
require 'connect.php';
$gmail = $_GET['gmail'];

$q = "DELETE FROM user WHERE gmail ='$gmail'";

$result = mysqli_query($Con,$q);

if($result){
    header("location: showuser.php");
  }
else{
    //echo "เกิดข้อผิดพลาดในการลบข้อมูล".mysqli_error($Con);
}
?>
