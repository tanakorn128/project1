<?php

echo "<div style=\"font-size:18px;\">$g </div>";
session_start();
ob_start();
echo $_SESSION['Y0gmail'];
?> 

<title>Admin</title>
<body style="background-color:pink;" font-size:medium; background="image.png";>
<br><h3 align = 'right'><input type="button" name ="submit" value ="Logout" onclick='location.replace("https://www.google.com/accounts/Logout?continue=https://appengine.google.com/_ah/logout?continue=http://localhost/project1/index.php")' 
session_destroy();
class="btn btn-danger" ><h3>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

<center>
<input type = button value = "กล่องจดหมาย" onclick='location.replace("messagebox.php")' class="button1">
<input type = button value = "เพิ่มหัวข้อ/เช็กชื่อ" onclick='location.replace("pay_topic.php")' class="button1">
<input type = button value = "ประวัติ" onclick='location.replace("History_2.php")' class="button1">
<input type = button value = "ระบบสมาชิก" onclick='location.replace("showuser.php")' class="button1">
</center>

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
  background-color: #4CAF5
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
  </style>
  

  