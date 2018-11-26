<?php
require_once "pay-message.php";
require('connect.php') ;
$sid = 60030001;
$Pald=04;
$TID =1;
$detel= $_POST['de'];
$pay_day= $_POST['Pay_day'];
$pay_mon= $_POST['Pay_mon'];
$pay_year= $_POST['Pay_year'];
$imag_name=$_POST['de'];
$q ="INSERT INTO  payment(SID,pald,date,imgname,detel) VALUES ('$sid','$Pald','$pay_day-$pay_mon-$pay_year','$imag_name','$detel')";
        $result = mysqli_query($Con,$q);

        if ($result){
            echo "เพิ่มข้อมูลแล้ว";
            header("location: pay-message.php");
        }else{
            echo "เพิ่มข้อมูลไม่ได้".mysqli_error($Con);
        }
        mysqli_close($Con);
        

?>