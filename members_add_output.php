<html>
<head>
<meta charset="UTF-8">
<title>members_add_output</title>
</head>
<body>

<?php
if(preg_match('/^[ぁ-んァ-ヶー一-龠]{1,10}+$/u',$_REQUEST['name'])&&
	preg_match('/^[0-9]{4}\/[0-9]{2}\/[0-9]{2}$/', $_REQUEST['dob']) &&
	preg_match('/^[0-9]{3}$/', $_REQUEST['height'])){
	echo '入力情報をを追加しました。';
	$pdo=new PDO('mysql:host=localhost;dbname=data;charset=utf8', 'user', 'password');
	$sql=$pdo->prepare('insert into member values(null,?,?,?,?)');
	$sql->execute(
		[htmlspecialchars($_REQUEST['name']), $_POST['sex'],
		$_REQUEST['dob'], $_REQUEST['height']]);
?>

<form action="members.php" method="post">
<div><input type="submit" value="一覧に戻る"></div>
</form>

<?php
} else{
	echo '入力情報を確認してください。';
}
?>

<form action="members_add.php" method="post">
<div><input type="submit" value="入力画面に戻る"></div>
</form>

</body>
</html>