<?php

?>

<h3 align = 'right'><input type = button value = "เพิ่ม" onclick='location.replace("+topic.php")' class="button1">
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Pay_topic</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body style="background-color:pink;">
<!-- //<tr><td><input type="text" name="n0" placeholder="TID" class="form-control name_list" /></td> </tr> -->
</body>
</html>





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

?><center>
<table style = "width: 800px">
    <tr>
    
    </tr>  
        <?php
                while ($row = mysqli_fetch_array($result)){
        ?>
    <tr>
    
        <td><?php  echo $row['topic']; ?></td>
        <td><a href ="from.php?oder=<?php echo $row['gmail'];?>"> จ่ายเงิน </a></td>
        
    
    <?php
    }
    ?>
   
    </tr>
</table>

</center>
</body>
</html>
