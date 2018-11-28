
<meta charset="UTF-8">
<?php
// require 'pay_topic.php';
$ref = $_POST['ID'];
$ref2 = $ref;

echo "$ref";
?>


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

<table style = "width: 800px">
   
        <?php
                while ($row = mysqli_fetch_array($result)){
        ?>
    <tr>
    
        <td><?php echo $row['otpi'];?></td>
     
        
    </tr>
     </center>
    <?php
    }
 
    ?>
</table>
