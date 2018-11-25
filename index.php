<?php

require_once "GoogleLoginx/login.php";
?>
<html>
    <head><style>
          body {
                background-color: #000;
                color: #FFFFFF;
                font-family: Arial;
                font-size: 24px;
                text-align: center;
               }
      .TestCss {
                color: #000099;
                font-family: Arial;
                font-size: 40px;
                text-align: center;
               }
     .TestCss1 {
                color: #7700ff;
                font-family: Arial;
                font-size: 72px;
                text-align: center;
               }
     </style></head>
<body style="background-color:pink;">
 <form>  
 <h3 align = 'right'><input type="button" onclick="window.location = '<?php echo $loginURL ?>';" value="Log In With Google"
 <?php
session_start();
ob_start();
$_SESSION['Y0gmail']="PHP Developer Thailand";
unset($_SESSION['Y0gmail']);
?>
  class="btn btn-danger"><h3>
</form>
<h1 class="TestCss">ระบบเก็บเงินห้อง</h1> 
<br><table border= 2 align ="center"width = "80%" height="70%">
    <tr>
        <th><center>...............................ยังไม่เสร็จ...............................................</center></th>
    </tr>
    <tr>
    <th><center>...............................ยังไม่เสร็จ...............................................</center></th>      
</tr>  
<tr>
<th><center>...............................ยังไม่เสร็จ...............................................</center></th>
    </tr>
    <tr>
    <th><center>................................ยังไม่เสร็จ...............................................</center></th>      
</tr> 
    </table>
</body>
</html>

