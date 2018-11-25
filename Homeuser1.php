<?php
require 'connect.php';
$q ="SELECT * FROM googlelogin ";

$result = mysqli_query($Con,$q);
$row = mysqli_fetch_array($result)
?>
<?php
session_start();
$g = $_SESSION['Y0gmail'];
echo "<div style=\"font-size:18px;\">$g </div>";

?>
<html>
<head><title>member</title>

<style>
.button {
    background-color: #4CAF50; /* Green */
    border: 1px solid green;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    cursor: pointer;
}
.button:hover {
    background-color: #3e8e41;
}
</style>
</head>
<html>
<html>
    <head>
        <title>user1</title>
    </head>
    <body style="background-color:pink;">
    
<br><h3 align = 'right'><input type="button" name ="submit" value ="Logout" onclick='location.replace("https://accounts.google.com/Logout")'class="btn btn-danger"><h3>
            <form >
                <center>
                <br><input type="button" name="pay" value="Pay" onclick='location.replace("pay.php")'class="button">
                <input type="button" value="ประวัติการจ่ายเงิน" onclick='location.replace("History.php")'class="button"> 
                
            </center>
            </form>
            <table border= 2 align ="center"width = "80%" height="60%">
                   <br> <tr><td></td></tr>
                   
                </table>
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    </body>
</html>
