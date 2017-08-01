<!doctype html>
<html>
<head>
  <meta charset = "utf-8">
  <title>註冊網頁</title>
  <form method = "post" action = "show.php">
</head>
<body>
  <?php
    include("title.php")
  ?>  
  請輸入姓名: <input type = "text" name = "username" required><br>
  請輸入密碼: <input type = "password" name = "userpass" required><br>
  請輸入個人暱稱: <input type = "text" name = "nickname" required><br>
  請輸入email: <input type = "email" name = "useremail" required><br>
  請輸入生日: <input type = "Date" name = "userbday" required><br>
  請上傳個人大頭照:<br>
  上傳檔案:<br>
  <input type="file" name="upfile[]"><br> 
  請輸入您的性別 <input type = "radio" name = "gender" value = "male" required>男<br>
                 <input type = "radio" name = "gender" value = "female" required>女<br>
  請輸入您的興趣: <br>
  <input type = "radio" name = "interest" value = "playgames"><br>
  <input type = "radio" name = "interest" value = "sleep"><br>
  <input type = "radio" name = "interest" value = "read"><br>
  <span class = "align_top">請輸入您的其他建議: </span>
  <textarea name = "advice" rows = "10"  cols = "10">
  </textarea><br>
  
  <input type = "submit" value = "提交">
  <input type = "reset" value = "重設">
  
</body>
</html>
  
           
  