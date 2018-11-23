<html>
    <head>
        <title>แสดงรายชื่อผู้ใช้</title>
        <meta charset ="utf -8">
        <style>
            table,th,td{
                border : 1px solid black;
                border-collapse: collapse;
            }
        </style>
    </head>
<body>
<?php
    require 'connect.php';

    $q ="SELECT * FROM googlelogin ";

    $result = mysqli_query($Con,$q);
?>
<center>
<hr> <h1> ข้อมูลผู้ใช้งาน
<table style = "width: 600px">
    <tr>
        <th>Gmail ผู้ใช้งาน</th>
        <th>ระดับผู้ใช้งาน</th>
        <th>ลบ</th>
        
    </tr>  
        <?php
                while ($row = mysqli_fetch_array($result)){
        ?>
    <tr>
        <td><?php echo $row['gmail'];?></td>
        <td><?php echo $row['g_name'];?></td>

    </tr>
    
     </center>
    <?php
    }
        mysqli_free_result($result);
        mysqli_close($Con);
    ?>
</table>
<form action="deleteshowuserG.php" method="POST">
<input type="text"  name ="datax"/>
        <input type="submit" name ="de" value="ลบ" />

<hr>
</body>
</html>