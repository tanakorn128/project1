
<?php 
require "connect.php";
$TID = $_POST['n0'];
$Topic = $_POST['n1'];
  $Detel = $_POST['n2'];
  $must_puy = $_POST['must_puy'];

  $start_day = $_POST['user_day'];
  $start_mon = $_POST['user_mon'];
  $start_year = $_POST['user_year'];
  $_POST['SID'][0]; // Read value checkbox array
  $_POST['SID'][1]; // Read value checkbox array
 
  $end_day = $_POST['end_day'];
  $end_mon = $_POST['end_mon'];
  $end_year = $_POST['end_year'];
 $pald = 0;

    //text แบบ array
    //  foreach($_POST[UID] AS $i => $text) {
    //       echo "value of text[$i]='$text'<br />";
          
    //  }
     for($i=0,$count=1;$i<count($_POST["UID"]);$i++)
     
     {
     if(trim($_POST["UID"][$i]) != "")
     {
     $out_id = $_POST["UID"][$i]."<br>";
     $qa ="INSERT INTO  payment(SID,oder,pald) VALUES ('$out_id','$TID',$pald)";
     $result = mysqli_query($Con,$qa);
     }
     }



            $q ="INSERT INTO  title(oder,topic,detail,must_puy,db_start,db_end) VALUES ('$TID','$Topic','$Detel','$must_puy','$start_day-$start_mon-$start_year','$start_day-$end_mon-$end_year')";
             $qa ="INSERT INTO  title(No) VALUES ('$TID','$Topic','$Detel','$must_puy','$start_day-$start_mon-$start_year','$start_day-$end_mon-$end_year')";
            $result = mysqli_query($Con,$q); 
            if ($result){
                echo "เพิ่มข้อมูลแล้ว";
                header("location: +topic.php");
            }else{
                echo "เพิ่มข้อมูลไม่ได้".mysqli_error($Con);
            }
            mysqli_close($Con);
            ?> 

 
 

 
