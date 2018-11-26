
<?php 
require "connect.php";
$TID = $_POST['n0'];
$Topic = $_POST['n1'];
  $Detel = $_POST['n2'];
  $must_puy = $_POST['must_puy'];

  $start_day = $_POST['user_day'];
  $start_mon = $_POST['user_mon'];
  $start_year = $_POST['user_year'];

 $end_day = $_POST['end_day'];
 $end_mon = $_POST['end_mon'];
 $end_year = $_POST['end_year'];

            $q ="INSERT INTO  title(oder,topic,detail,must_puy,db_start,db_end) VALUES ('$TID','$Topic','$Detel','$must_puy','$start_day-$start_mon-$start_year','$start_day-$end_mon-$end_year')";
            $result = mysqli_query($Con,$q); 
            if ($result){
                echo "เพิ่มข้อมูลแล้ว";
                header("location: +topic.php");
            }else{
                echo "เพิ่มข้อมูลไม่ได้".mysqli_error($Con);
            }
            mysqli_close($Con);
            ?> 

 
 

 
