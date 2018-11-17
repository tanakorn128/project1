<?php
require 'connect.php';

$gmail=2;
$Levels=2;

$Q = "delete FROM user WHERE gmail='$gmail'";
$relult = mysqli_query($Con,$Q);

if($relult){
    echo "ลบข้อมูลเรียบร้อย";
}
else{
    echo "เกิดข้อผิดพลาด".mysqli_error($Con);
}
mysqli_close($Con);
