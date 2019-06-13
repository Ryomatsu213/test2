<html>
<head>
<meta charset="UTF-8">
<title>members_delete</title>
</head>
<body>

<?php
$pdo=new PDO('mysql:host=localhost;dbname=data;charset=utf8', 'user', 'password');

$sql=$pdo->prepare('select * from member where id=?');
$sql->execute([$_REQUEST['id']]);
foreach ($sql as $row){}
if(empty($row)){
	exit('入力されたメンバーIDは存在しません。');
}

$sql=$pdo->prepare('delete from member where id=?');
$sql->execute([$_POST['id']]);
echo '削除しました';
?>

<form action="members.php" method="post">
<div><input type="submit" value="一覧に戻る"></div>
</form>

</body>
</html>