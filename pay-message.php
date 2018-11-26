
<?php
session_start();
ob_start();
echo $_SESSION['Y0gmail'];
?>
<center>
<?php

// Include คลาส class.upload.php เข้ามา เพื่อจัดการรูปภาพ

require_once('class.upload.php/src/class.upload.php') ;

// ส่วนกำหนดการเชื่อมต่อฐานข้อมูล
require('connect.php') ;



//  ถ้าหากหน้านี้ถูกเรียก เพราะการ submit form 

//  ประโยคนี้จะเป็นจริงกรณีเดียวก็ด้วยการ submit form

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form1")) {

// เริ่มต้นใช้งาน class.upload.php ด้วยการสร้าง instant จากคลาส

$upload_image = new upload($_FILES['image_name']) ; // $_FILES['image_name'] ชื่อของช่องที่ให้เลือกไฟล์เพื่ออัปโหลด

//  ถ้าหากมีภาพถูกอัปโหลดมาจริง

if ( $upload_image->uploaded ) {



$upload_image->image_resize         = false ; // อนุญาติให้ย่อภาพได้


$upload_image->image_ratio_y        = false; // ให้คำณวนความสูงอัตโนมัติ

$upload_image->process( "upload_images" ); // เก็บภาพไว้ในโฟลเดอร์ที่ต้องการ  *** โฟลเดอร์ต้องมี permission 0777

// ถ้าหากว่าการจัดเก็บรูปภาพไม่มีปัญหา  เก็บชื่อภาพไว้ในตัวแปร เพื่อเอาไปเก็บในฐานข้อมูลต่อไป

if ( $upload_image->processed ) {

$image_name =  $upload_image->file_dst_name ; // ชื่อไฟล์หลังกระบวนการเก็บ จะอยู่ที่ file_dst_name

$upload_image->clean(); // คืนค่าหน่วยความจำ

// เก็บชื่อภาพลงฐานข้อมูล



}
    }
        }  

?>

<html>

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
<title>Upload Image To Database</title>

</head>


<body>
<B>หลักฐานการจ่ายเงิน(ถ้ามี)
<br>อัพโหลดเฉพาะรูปภาพ
<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">

<form action="imgupload.php" method="POST">
<br><input name="image_name" type="file" id="image_name" size="40" class="btn btn-info"/>
<br><input type="text" name="SID_Used" class="form-control name_list" placeholder="รหัสนักศึกษา"/>
<br><input type="text" name="de" class="form-control name_list" placeholder="ใส่รายละเอียด"/>

<tr><td bgcolor="#FFFFFF">
                                        <br> <B>วันที่จ่าย
                                           <br> วัน
                                            <select name="Pay_day">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                            <option value="13">13</option>
                                            <option value="14">14</option>
                                            <option value="15">15</option>
                                            <option value="16">16</option>
                                            <option value="17">17</option>
                                            <option value="18">18</option>
                                            <option value="19">19</option>
                                            <option value="20">20</option>
                                            <option value="21">21</option>
                                            <option value="22">22</option>
                                            <option value="23">23</option>
                                            <option value="24">24</option>
                                            <option value="25">25</option>
                                            <option value="26">26</option>
                                            <option value="27">27</option>
                                            <option value="28">28</option>
                                            <option value="29">29</option>
                                            <option value="30">30</option>
                                            <option value="31">31</option>
                                            </select>
                                            เดือน
                                            <select name="Pay_mon">
                                            <option value="มกราคม">มกราคม</option>
                                            <option value="กุมภาพันธ์">กุมภาพันธ์</option>
                                            <option value="มีนาคม">มีนาคม</option>
                                            <option value="เมษายน">เมษายน</option>
                                            <option value="พฤษภาคม">พฤษภาคม</option>
                                            <option value="มิถุนายน">มิถุนายน</option>
                                            <option value="กรกฎาคม">กรกฎาคม</option>
                                            <option value="สิงหาคม">สิงหาคม</option>
                                            <option value="กันยายน">กันยายน</option>
                                            <option value="ตุลาคม">ตุลาคม </option>
                                            <option value="พฤศจิกายน">พฤศจิกายน </option>
                                            <option value="ธันวาคม">ธันวาคม </option>
                                            </select>
                                            ปี    <input size=4 type=text name="Pay_year" maxlength=4 placeholder="พ.ศ.">
                                            </td>
<br><input type="submit" value="ส่ง"class="btn btn-info" onclick='location.replace("imgupload.php")'/>

</p>

<p>





<input type="hidden" name="MM_insert" value="form1" />

</p>

</form>

</body>

</html>
<?php
require_once "pay-message.php";
require('connect.php') ;
$sid = $_POST['SID_Used'];
$Pald=04;
$TID =1;
$detel= $_POST['de'];
$pay_day= $_POST['Pay_day'];
$pay_mon= $_POST['Pay_mon'];
$pay_year= $_POST['Pay_year'];
$imag_name=$_POST['de'];
if(empty($_POST['$sid '])){
$q ="INSERT INTO  payment(UID,pald,date,detel,imgname) VALUES ('$sid','$Pald','$pay_day-$pay_mon-$pay_year','$detel','$image_name')";
        $result = mysqli_query($Con,$q);
}
        if ($result){
            echo "เพิ่มข้อมูลแล้ว";
            $sid = $_POST['SID_Used'];
$Pald=04;
                $TID =1;
                $detel= "";
                $pay_day= "";
                $pay_mon="" ;
                $pay_year= "";
                $imag_name="";
            header("location: pay-message.php");
        }//else{
        //     echo "เพิ่มข้อมูลไม่ได้".mysqli_error($Con);
        // // }
        // mysqli_close($Con);
        

?>




