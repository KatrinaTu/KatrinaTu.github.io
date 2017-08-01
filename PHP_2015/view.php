<?php
header('charset = utf-8');

  if( isset($_GET['money']) && ($_GET['money']<10000000) ){
    echo '對不起無法進入營區';
  }else if( ($_GET['money'] > 10000000) && ($_GET['money'] < 100000000) ){
    echo '歡迎進入營區,但只能在紅線外參觀';
  }else{
    echo '歡迎乘坐阿帕契,拍帳打卡請小心';
  } 

?>