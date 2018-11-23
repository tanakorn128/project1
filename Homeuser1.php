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
    
<br><input type="button" name ="submit" value ="Logout" onclick='location.replace("https://accounts.google.com/Logout?hl=en&continue=https://www.google.co.th/search%3Fq%3D%2524_SESSION%255B%2527access_token%2527%255D%253D%2524gClient-%253EgetAccessToken()%253B%26oq%3D%2524_SESSION%255B%2527access_token%2527%255D%253D%2524gClient-%253EgetAccessToken()%253B%26aqs%3Dchrome..69i57.260j0j4%26sourceid%3Dchrome%26ie%3DUTF-8&timeStmp=1542479388&secTok=.AG5fkS81FPGO3XR0ifstrn8i_yqmileIQA")'>
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
