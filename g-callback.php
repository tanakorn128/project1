<?php
    date_default_timezone_set("Asia/Bangkok");
    require_once "GoogleLoginx/config.php";
    require 'connect.php';
    
  

   // header('Location: Homeuser1.php');
     //print($_GET['code']);
    $gClient->authenticate($_GET['code']);
    
   $_SESSION['access_token']=$gClient->getAccessToken();
    $token_data=$gClient->verifyIdToken();
   //print_r($token_data);
     //print_r($tokenVerifier);
 
     $name=$token_data['name'];
    $email=$token_data['email'];
    
      // $q ="INSERT INTO  googlelogin(gmail,g_name) VALUES ('$email','$name')";
      // $result = mysqli_query($Con,$q);
       
 require 'connect.php';

 $q ="SELECT * FROM user ";

 $result = mysqli_query($Con,$q);
 
 
while ($row = mysqli_fetch_array($result)){
   $sum = $row['gmail'];
        $lv = $row['Levels'];
            if($email == $sum){
                if($lv== "admin"){
                    $_SESSION['Y1lavel']="Admin";
        header('Location: Homeuser0.php');}
            if($lv == "member"){
                header('Location: Homeuser1.php');}}
                     else{
                        require "Homeuser2.php";}}

session_start();
ob_start();
$_SESSION['Y0gmail']="$email";
 ?>






 

 



       
     
    




