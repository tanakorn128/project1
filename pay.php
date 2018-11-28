<?php
require 'connect.php';

$q ="SELECT * title user ";

$result = mysqli_query($Con,$q);
session_start();
ob_start();
echo $_SESSION['Y0gmail'];
echo "<div style=\"font-size:18px;\">$g </div>";

    require 'connect.php';

    $q ="SELECT * FROM title ";

    $result = mysqli_query($Con,$q);

?>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>

<html>
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
<body style="background-color:pink;">
</body>
</html>

<center>
<hr> <h1> 
<table style = "width: 800px">
  
        <?php
                while ($row = mysqli_fetch_array($result)){
                    
        ?>
        
    <tr>
    
        <td><?php 
        echo  $row['topic'];
        
        ?></td>
        <td><input type = button value = จ่าย onclick='location.replace("X.php")' >  </td>
    </tr>
     </center>
    <?php
    }c
       
        
    ?>
    
</table>
<h3 align = 'below'><input type="button" name ="submit" value ="กลับหน้าหลัก" onclick='location.replace("homeuser1.php")' class="button1">




