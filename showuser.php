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

    $q ="SELECT * FROM user ";

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
<br><input type="button" name ="submit" value ="เพิ่ม" onclick='location.replace("adduser.html")'>

<hr>
</body>
</html>