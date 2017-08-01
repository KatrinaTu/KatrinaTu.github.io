<?php
  if( isset($_POST['username']) ){
    echo "姓名: $username ";
  }else{
    echo "您沒有輸入姓名喔"
    echo "<a href = register.php'>重新輸入</a>";
  }
  
  if( isset($_POST['userpass']) ){
    echo "姓名: $userpass ";
  }else{
    echo "您沒有輸入密碼喔"
    echo "<a href = register.php'>重新輸入</a>";
  }
  
  if( isset($_POST['nickname']) ){
    echo "姓名: $nickname ";
  }else{
    echo "您沒有輸入暱稱喔"
    echo "<a href = register.php'>重新輸入</a>";
  }
  
  if( isset($_POST['useremail']) ){
    echo "姓名: $useremail ";
  }else{
    echo "您沒有輸入email喔"
    echo "<a href = register.php'>重新輸入</a>";
  }
  
  if( isset($_POST['userbday']) ){
    echo "姓名: $userbday ";
  }else{
    echo "您沒有輸入生日喔"
    echo "<a href = register.php'>重新輸入</a>";
  }
  
  echo "您的大頭照:";
  echo $_FILES["upfile"]["tmp_name"]."<br>";
  
  if( isset($_POST['gender']) ){
    echo "姓名: $gender ";
  }else{
    echo "您沒有輸入性別喔"
    echo "<a href = register.php'>重新輸入</a>";
  }
  
  if( isset($_POST['interest']) ){
    echo "姓名: $interest ";
  }else{
    echo "您沒有輸入興趣喔"
    echo "<a href = register.php'>重新輸入</a>";
  }
  
  
  

?>