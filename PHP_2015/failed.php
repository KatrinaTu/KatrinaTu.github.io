<?php
  session_start();
  if( isset($_SESSION["status"]) ){  
    if($_SESSION["status"]=="No"){
      echo "非法登入，3秒後回登入畫面";
      header("Refresh:3;url=login.php");       
    }  
  }                                       
?>
