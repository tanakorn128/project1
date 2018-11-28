<?php
include "connect.php";
$sql = "SELECT * FROM title WHERE TID";
$query = mysqli_query($sql);
$result = mysqli_fetch_assoc($query);

?>
<!DOCTYPE html>
<html>
 <head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <meta name="language" content="en" />
 <title>รายละเอียด</title>
 <style type="text/css">
 body{
 font-size: 13px;
 }
 </style>
 </head>
 <body>
 <table width="500" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#000000">
 <tr>
 <td>
 <table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
 <tr>
 <td colspan="3" bgcolor="#000000">
 <b style="color: #FFFFFF;"><?php echo $result['topic']; ?></b></td>
 </tr>
 <tr>
 <td valign="top"><?php echo nl2br($result['detail']); ?></td>
 </tr>
 <tr>
 <td>
 <strong>ชื่อ :</strong> <?php echo $result['name']; ?>
 </td>
 </tr>
 <tr>
 <td style="text-align: right;">
 <strong>วันที่ประกาศ :</strong> <?php echo $result['datetime']; ?>
 </td>
 </tr>
 </table>
 </td>
 </tr>
 </table>
 </body>
</html>
