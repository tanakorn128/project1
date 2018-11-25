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


$q ="INSERT INTO  image(image_name) VALUES ('$image_name')";
        $result = mysqli_query($Con,$q);



}
    }
        }  

?>

<html>

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Upload Image To Database</title>

</head>


<body>

<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">


<form action="imgupload.php" method="POST">
<input name="image_name" type="file" id="image_name" size="40" />
<input type="text" name="de" />
<br><input type="submit" value="Upload" />

</p>

<p>





<input type="hidden" name="MM_insert" value="form1" />

</p>

</form>

</body>

</html>
<?php
$detel= $_POST['de'];

?>