<HTML>
    <HEAD>
        <TITLE></TITLE>
        <META charset="UTF-8">
    </HEAD>
    <BODY>
        <?php
        require 'connect.php';
        if(empty($_POST['gmail'])){
            echo "กรุณากรอกก Gmail ก่อน";     
            exit();
        }
        if(empty($_POST['Level'])){
            echo "กรุณากรอกก ระดับผู้ใช้ ก่อน";     
            exit();
        }
       
        $data_gmail = $_POST['gmail'];
        $data_LEVEL = $_POST['Level'];
        $q ="INSERT INTO  user(gmail,Levels) VALUES ('$data_gmail','$data_LEVEL')";
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