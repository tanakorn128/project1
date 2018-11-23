<?php
    date_default_timezone_set("Asia/Bangkok");
    require_once "GoogleLoginx/config.php";
    require 'connect.php';

    header('Location: Homeuser1.php');
    // print($_GET['code']);
    $gClient->authenticate($_GET['code']);
    
   $_SESSION['access_token']=$gClient->getAccessToken();
    $token_data=$gClient->verifyIdToken();
   print_r($token_data);
     print_r($tokenVerifier);
 

    $g_names=$token_data['name']
   / $email=$token_data['email'];
      
?>
    //  if($g_names!=$email)
    //  {
    //     // $q ="INSERT INTO  googlelogin(gmail,g_name) VALUES ('$email','$g_names')";
    //     // $result = mysqli_query($Con,$q);
    //  }
    //  if($g_names==$g_names){
    //     $outname=$g_names;
       
     
    




