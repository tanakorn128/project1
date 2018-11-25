<?php
require "connect.php"

?>
<HTML>
    <HEAD>

        <TITLE></TITLE>
        <META charset="UTF-8">
    </HEAD>
    <BODY> 
        
        <?php
        if(empty($_POST['ID'])){
            echo "กรุณากรอก ID ก่อน";     
            exit();
        }
        if(empty($_POST['Name'])){
            echo "กรุณากรอก Name ก่อน";     
            exit();
        }
        if(empty($_POST['nickname'])){
            echo "กรุณากรอก nickname ก่อน";     
            exit();
        }
        if(empty($_POST['gmail'])){
            echo "กรุณากรอก gmail ก่อน";     
            exit();
        }
        if(empty($_POST['Tel'])){
            echo "กรุณากรอก Tel ก่อน";     
            exit();
        }
        if(empty($_POST['Level'])){
            echo "กรุณากรอก ระดับผู้ใช้งาน ก่อน";     
            exit();
        }
        
        $data_SID = $_POST['ID'];
        $data_name = $_POST['Name'];
        $data_nickname = $_POST['nickname'];
        $data_gmail = $_POST['gmail'];
        $data_Tel = $_POST['Tel'];
        $data_LEVEL = $_POST['Level'];
        $q ="INSERT INTO  user(SID,names,nicknames,gmail,Tel,Levels) VALUES ('$data_SID','$data_name','$data_nickname','$data_gmail','$data_Tel','$data_LEVEL')";
        $result = mysqli_query($Con,$q);
        if ($result){
            echo "เพิ่มข้อมูลแล้ว";
            header("location: showuser.php");
        }else{
            echo "เพิ่มข้อมูลไม่ได้".mysqli_error($Con);
        }
        mysqli_close($Con);
        ?> 
        </form>
   <form action="test.php" method="GET">
    <input type="text" name-"test" />
    <input type="submit" name="submit2" value="submit"/>
   </form>      
    </BODY>
</HTML>

  