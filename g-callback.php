<?php
    date_default_timezone_set("Asia/Bangkok");
    require_once "GoogleLoginx/config.php";
    
    // print($_GET['code']);
    $gClient->authenticate($_GET['code']);
    
    $_SESSION['access_token']=$gClient->getAccessToken();
    $token_data=$gClient->verifyIdToken();
    print_r($token_data);
    $email=$token_data['email'];
    $name=$token_data['given_name'];
    $surname=$token_data['family_name'];
    
	//  header('Location: index.php');
	//  exit();





