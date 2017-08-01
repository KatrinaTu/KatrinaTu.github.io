<?php
  session_start();
  
  if( isset($_SESSION["status"]) ){  
    if($_SESSION["status"]=="Yes"){
      echo "Logging Success!";
      echo "<a href = 'logout.php'>登出</a>"; 
    }
  }                                       
?>