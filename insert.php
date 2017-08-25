<html>
<head>
<title>ひとこと日記登録</title>
</head>
<body>

<?php
try
{
    $db = new PDO("mysql:host=localhost;dbname=myapp;charset=utf8","yoshihiro0326","");
}
catch (Exception $error)
{
    die("接続に失敗しました:".$error->getMessage());
}
$stt=$db->prepare("INSERT INTO diary values(:name,:contents,:date,:tag,NOW())");
$stt->bindValue(':name',$_POST['name']);
$stt->bindValue(':contents',$_POST['contents']);
$stt->bindValue(':date',$_POST['date']);
$stt->bindValue(':tag',$_POST['tag']);

$stt->execute();
$db=NULL;

print("登録成功しました。");
?>

</br>
</br>

<a href="view.php">戻る</a>
</body>
</html>