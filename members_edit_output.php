<html>
<head>
<meta charset="UTF-8">
<title>members_edit_output</title>
</head>
<body>

<?php
if(preg_match('/^[ぁ-んァ-ヶー一-龠]{1,10}+$/u',$_REQUEST['name'])&&
	preg_match('/^[0-9]{4}\/[0-9]{2}\/[0-9]{2}$/', $_REQUEST['dob']) &&
	preg_match('/^[0-9]{3}$/', $_REQUEST['height'])){
	echo '入力情報を更新しました。';
	$pdo=new PDO('mysql:host=localhost;dbname=data;charset=utf8', 'user', 'password');
	$sql=$pdo->prepare('update member set name=?, sex=?, dob=?, height=? where id=?');
	$sql->execute([htmlspecialchars($_REQUEST['name']), $_REQUEST['sex'], $_REQUEST['dob'], $_REQUEST['height'], $_REQUEST['id']]);
?>

<form action="members.php" method="post">
<div><input type="submit" value="一覧に戻る"></div>
</form>

<?php
} else{
	echo '入力情報を確認してください。';
}
?>

</form>

</body>
</html>
