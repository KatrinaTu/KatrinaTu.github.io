<?php
  hrader('charset = utf-8');
  
  echo "請輸入姓名:" ;
  
  <input type = "text" name = "username">
  
  date_default_timezone_set('Asia/Taipei');
  
  setcookie("username", $username, time()+7*86400, "/");
  
  if( isset($_COOKIE['username'])){
    echo "歡迎 $username 再次回到網站!";
  
    if( (date('G') >= 0) && (date('G') < 6) ){
      echo '現在是凌晨時刻,請早點休息,保重身體';
    }else if( (date('G') >= 6) && (date('G') < 12) ){
      echo '早安,祝你有美好的一天';
    }else if( (date('G') >= 12) && (date('G') <18) ){
      echo '午安~';
    }else{
      echo '晚安,準備休息就寢囉';
    } 
  }


?>


    
  