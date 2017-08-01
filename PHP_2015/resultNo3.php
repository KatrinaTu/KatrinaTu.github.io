<?php
session_start();

  $name = "A1030099";
  $username = $_POST['username'];
  
  $pass = "12345";
  $userpass = $_POST['userpass'];

  if( isset($_POST['nsername']) && isset($_POST['userpass']) ){
    if( ($username == $name) && ($userpass == $pass) ){
      
      $_SESSION['status'] = "Yes";      
      header('Location: grade.php'); //進入成績查詢          
      
    }else{
    
      $_SESSION['status'] = "No";
      header('Location: failed.php');      
    
    }
  }
  
  
?>  