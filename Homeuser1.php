<?php
require 'connect.php';

$q ="SELECT * title user ";

$result = mysqli_query($Con,$q);
session_start();
ob_start();
echo $_SESSION['Y0gmail'];

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<body style="background-color:pink;">
    
    <br><h3 align = 'right'><input type="button" name ="submit" value ="Logout" onclick='location.replace("https://accounts.google.com/Logout")'class="btn btn-danger"><h3>
                <form >
                    <center>
                    <br><input type="button" name="pay" value="Pay" onclick='location.replace("pay.php")'class="btn btn-info">
                    <input type="button" value="ประวัติการจ่ายเงิน" onclick='location.replace("History.php")'class="btn btn-info"> 
                        </center>
                        
</body>
</html>


<html>
    <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> 
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
?>
<center>
<hr> <h1> 
<table style = "width: 800px">
    <tr>
   
        
    </tr>  
        <?php
                while ($row = mysqli_fetch_array($result)){
        ?>
    <tr>
    
        <td><?php 
        
        echo  $row['topic'];
        
        
        
        ?></td>

        
    </tr>
     </center>
    <?php
    }
        mysqli_free_result($result);
        mysqli_close($Con);
    ?>
</table>

<hr>
</body>
</html>
<?php


