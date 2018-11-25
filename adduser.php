<?php> 
session_start();
ob_start();
echo $_SESSION['Y0gmail']; // ผลลัพธ์คือแสดงข้อความ Hello 
?>
<html>

    <META charset="UTF-8">
   
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
            <title>LOGIN</title>
    
    <body style="background-color:pink;">
        <form action="INSERTDATA.php" method="POST">
                <center>
    <B>เพิ่มผู้ใช้งาน<br><br>
            ID : <input type="text" name="ID" />
                Name    : <input type="text" name="Name" />
                    nickname   : <input type="text" name="nickname" />
                         Gmail : <input type="text" name="gmail" />
                             Tel : <input type="text" name="Tel" />
                                 <BR> <br>สมาชิก<input type="radio" name ="Level" value="member"/>
                                     ผู้ดูแล<input type="radio" name="Level" value="admin"/> 
                                        <BR> <br> <input type="submit" value="ตกลง"class="button1"/>
                
        <input type="reset" name="Submit2" value="รีเซ็ต"class="button1">
        <input  type="button" name ="submit" value ="ย้อนกลับ" onclick='location.replace("showuser.php")' class="button1">
       </form>
       </body>
      </html> 
   
