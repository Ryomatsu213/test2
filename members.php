<html>
<head>
<meta charset="UTF-8">
<title>members</title>
</head>
<body>

<div>パラメーターを変更したいメンバーのIDを入力してください。</div>
<form action="members_edit.php" method="post">
<div><input type="text" name="id"></div>
<div><input type="submit" value="検索"></div>
</form>

<div>削除したいメンバーのIDを入力してください。</div>
<form action="members_delete.php" method="post">
<div><input type="text" name="id"></div>
<div><input type="submit" value="削除"></div>
</form>

<form action="members_add.php" method="post">
<div><input type="submit" value="メンバー追加"></div>
</form>

<table border='1'>
<tr><th>メンバーID</th><th>名前</th><th>性別</th><th>誕生日</th><th>身長</th></tr>

<?php
$pdo=new PDO('mysql:host=localhost;dbname=data;charset=utf8', 'user', 'password');
foreach ($pdo->query('select * from member') as $row) {
?>

<tr>
<th><?php echo $row['id'] ?></th>
<th><?php echo $row['name'] ?></th>
<th><?php
		if($row['sex']==1){
			echo '男';}
		else if($row['sex']==2){
			echo '女';}
		else {
			echo '答えない';}?></th>
<th><?php echo $row['dob'] ?></th>
<th><?php echo $row['height'] ?></th></tr>
<?php
}
?>

</table>
</body>
</html>