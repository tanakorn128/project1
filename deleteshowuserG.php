<?php
require 'connect.php';

$sql = "DELETE FROM googlelogin

WHERE gmail = 'tanakornn.15@gmail.com' ";

$query = mysqli_query($Con,$sql);
$a =  $_POST['datax'];
?>
