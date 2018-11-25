
<html>
    <head>
        <style>
        .button1 {
  display: inline-block;
  padding: 10px 15px;
  font-size: 20px;
  cursor: pointer;
  text-align: center;	
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #4CAF50;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}

.button:hover {background-color: #3e8e41}

.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}</style>
        <title>แสดงรายชื่อผู้ใช้</title>
        <meta charset ="utf -8">
        <style>
            table,th,td{
                border : 1px solid black;
                border-collapse: collapse;
            }
        </style>
        
    </head>
<body style="background-color:pink;">
    
<?php

echo "<div style=\"font-size:18px;\">$g </div>";

    require 'connect.php';

    $q ="SELECT * FROM user ";

    $result = mysqli_query($Con,$q);
    session_start();
ob_start();
echo $_SESSION['Y0gmail']; // ผลลัพธ์คือแสดงข้อความ Hello 
?>
<center>
<hr> <h1> ข้อมูลผู้ใช้งาน
<table style = "width: 800px">
    <tr>
        <th>รหัสนักศึกษา</th>
        <th>ชื่อ</th>
        <th>ชื่อเล่น</th>
        <th>Gmail</th>
        <th>เบอร์โทร</th>
        <th>ระดับผู้ใช้งาน</th>
        <th>ลบ</th>
        
    </tr>  
        <?php
                while ($row = mysqli_fetch_array($result)){
        ?>
    <tr>
    
        <td><?php echo $row['SID'];?></td>
        <td><?php echo $row['names'];?></td>
        <td><?php echo $row['nicknames'];?></td>
        <td><?php echo $row['gmail'];?></td>
        <td><?php echo $row['Tel'];?></td>
        <td><?php echo $row['Levels'];?></td>
        <td><a href ="delete_user_from.php?gmail=<?php echo $row['gmail'];?>"> ลบ </a></td>
        
    </tr>
     </center>
    <?php
    }
        mysqli_free_result($result);
        mysqli_close($Con);
    ?>
</table>
<br><input type="button" name ="submit" value ="เพิ่ม" onclick='location.replace("adduser.php") 'class="button1">
<input  type="button" name ="submit" value ="กลับหน้าหลัก" onclick='location.replace("homeuser0.php")' class="button1">

<hr>
</body>
</html>
