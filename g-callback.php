<?php
    date_default_timezone_set("Asia/Bangkok");
    require_once "GoogleLoginx/config.php";
    require 'connect.php';

   // header('Location: Homeuser1.php');
     print($_GET['code']);
    $gClient->authenticate($_GET['code']);
    
   $_SESSION['access_token']=$gClient->getAccessToken();
    $token_data=$gClient->verifyIdToken();
   print_r($token_data);
     print_r($tokenVerifier);
 
     $name=$token_data['name'];
    $email=$token_data['email'];
    
      
?>
<?php
      // $q ="INSERT INTO  googlelogin(gmail,g_name) VALUES ('$email','$name')";
      // $result = mysqli_query($Con,$q);
       
    ?>

    <?php
 require 'connect.php';

 $q ="SELECT * FROM user ";

 $result = mysqli_query($Con,$q);
 
 ?>
 <?php
while ($row = mysqli_fetch_array($result)){
   $sum = $row['gmail'];
   $lv = $row['Levels'];
   if($email == $sum){
    if($lv== "admin"){
        header('Location: Homeuser0.php');
    }
    if($lv == "member"){
        header('Location: Homeuser1.php');
    }
 }
 else{
    header('Location: Homeuser2.php');
 }
 }
 ?>
 
 

 



       
     
    




