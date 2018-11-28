<!DOCTYPE html>
<html>
 <head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <meta name="language" content="en" />
 <title>รายเก็บเงิน</title>
 <style type="text/css">
 a{
 text-decoration: none;
 color: #666666;
 }
 a:hover{
 color: yellowgreen;
 }
 .table{
 padding: 0;
 width: 800px;
 font-size: 13px;
 }
 table.table thead tr{
 background-color: #000000;
 color: #FFFFFF;
 }
 table.table thead tr th{
 border: 1px solid #CCCCCC;
 padding: 5px;
 margin: 0px;
 }
 table.table tbody tr td{
 border-bottom: 1px solid #CCCCCC;
 padding: 5px;
 }
 </style>
 </head>
 <body>
  <a href="topic_p.php">เพิ่มหัวข้อเก็บเงิน</a>
 <thead>
<?php
include "connect.php";
$query="select * from title ORDER BY TID asc";
$result=mysqli_query($dbConnect,$query);
echo "<table border='1' align='center' width='500'>";
echo "<tr align='center' bgcolor='#CCCCCC'><td>รหัส</td><td>เรื่อง</td><td>วันที่</td><td>รายละเอียด</td><td>รายชื่อ</td></tr>";
while($row=mysqli_fetch_array($result)){
echo "<tr>";
  echo "<td>" .$row["TID"] .  "</td> "; echo "<td>" .$row["topic"] .  "</td> ";  
  echo "<td>" .$row["datetime"] .  "</td> ";
  echo "<td><a href='new 1.php?ID=$row[0]'>view</a></td> ";
  echo "<td><a href='check.php?ID=$row[0]'>click</a></td> ";
 
 }
?>
 </thead>
 </body>
</html>