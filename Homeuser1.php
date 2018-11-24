<html>
<title>member</title>
<html>
<?php
require 'connect.php';

?>
<?php
$q ="SELECT * FROM googlelogin ";

$result = mysqli_query($Con,$q);
$row = mysqli_fetch_array($result)


?>
<?php

?>
<html>
    <head>
        <title>user1</title>
    </head>
    <body>
    
<br><input type="button" name ="submit" value ="Logout" onclick='location.replace("https://accounts.google.com/Logout")'>
            <form >
                <center>
                <br><input type="button" name="pay" value="Pay" onclick='location.replace("pay.php")'>
                <input type="button" value="ประวัติการจ่ายเงิน" onclick='location.replace("History.php")'> 
                
            </center>
            </form>
            <table border= 2 align ="center"width = "80%" height="70%">
                   <br> <tr><td></td></tr>
                   
                </table>
    </body>
</html>
