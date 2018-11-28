<?php

require 'connect.php';
$topic = trim($_POST['topic']);
$detail = trim($_POST['detail']);
$name = trim($_POST['name']);
$datetime = date('Y-m-d H:i:s');

$sql = "INSERT INTO title (topic,detail,name,datetime) VALUES ";
$sql .= "('{$topic}','{$detail}','{$name}','{$datetime}')";
$result=mysqli_query($dbConnect,$sql);
print $result;

?>
</br>
<!DOCTYPE html>
<html>
 <head>
 </head>
 <body>
 <a href="pay_topic.php">กลับไปหน้าหลัก</a>
 </body>
 </html>