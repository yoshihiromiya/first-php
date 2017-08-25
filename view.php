<html>
<head>
<title>ひとこと日記登録</title>
</head>
<body>
 <form method="POST" action="insert.php">

  <p>
   日付：<br />
   <input type ="date" name ="date"/>
  </p>
  <p>
   お名前：<br />
   <input type ="text" name ="name" size ="15" maxlength="10"/>
  </p>
  <p>
   内容：<br />
   <input type ="text" name ="contents" size ="35" maxlength="30"/></br>
  </p>
  <p>
   タグ：<br />
   <input type ="text" name ="tag" /></br>
  </p>

  <p>
   <input type = "submit" value = "日記を登録する"/>
  </p>
 </form>
</body>
</html>
