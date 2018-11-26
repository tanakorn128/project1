<meta charset="UTF-8">
<?php
require 'connect.php';
$oder = $_GET['oder'];

$q = "DELETE FROM title WHERE oder ='$oder'";

$result = mysqli_query($Con,$q);

if($result){
    header("del+topic.php");
  }
else{
    echo "เกิดข้อผิดพลาดในการลบข้อมูล".mysqli_error($Con);
}
?>
