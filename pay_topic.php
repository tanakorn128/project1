

<align="left" input  type="button" name ="submit" value ="เพิ่ม" onclick='location.replace("+topic.php")' class="button1">


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

    $q ="SELECT * FROM title ";

    $result = mysqli_query($Con,$q);
    session_start();
ob_start();
echo $_SESSION['Y0gmail']; // ผลลัพธ์คือแสดงข้อความ Hello 
?>
<center>
<hr> <h1> 
<table style = "width: 800px">
    <tr>
        <th>oder</th>
        <th>topic</th>
      
      
        
    </tr>  
        <?php
                while ($row = mysqli_fetch_array($result)){
        ?>
    <tr>
    
        <td><?php echo $row['oder'];?></td>
        <td><?php echo $row['topic'];?></td>
        <td><a href ="delete_user_from.php?oder=<?php echo $row['gmail'];?>"> จ่าย </a></td>
    </tr>
     </center>
    <?php
for ($i=1; $i <10 ; $i++) { 
    # code...x
}
 }
        mysqli_free_result($result);
        mysqli_close($Con);
    ?>
</table>


<hr>
</body>
</html>
<p align=right><input  type="button" name ="submit" value ="เพิ่ม" onclick='location.replace("+topic.php")' class="button1">