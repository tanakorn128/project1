<?php
    date_default_timezone_set("Asia/Bangkok");
    require_once "GoogleLoginx/config.php";
    require 'connect.php';

    header('Location: Homeuser1.php');
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
       $q ="INSERT INTO  googlelogin(gmail,g_name) VALUES ('$email','$name')";
       $result = mysqli_query($Con,$q);
       
    ?>
    
    <?php

    ?>
       
     
    




