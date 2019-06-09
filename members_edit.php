<html>
<head>
<meta charset="UTF-8">
<title>members_edit</title>
</head>
<body>

<form action="members.php" method="post">
<div><input type="submit" value="一覧に戻る"></div>
</form>

<table border='1'>
<tr><th>メンバーID</th><th>名前</th><th>性別</th><th>誕生日</th><th>身長</th></tr>

<?php
$pdo=new PDO('mysql:host=localhost;dbname=data;charset=utf8', 'user', 'password');
$sql=$pdo->prepare('select * from member where id=?');
$sql->execute([$_REQUEST['id']]);
foreach ($sql as $row) {
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
</table>

<?php
}
?>

<form action="members_edit_output.php" method="post">
<input type="hidden" name="id" value="<?=$_REQUEST['id']?>">
<div>名前 (10文字以内)<input type="text" name="name"></div>
<div>性別<input type="radio" name="sex" value="1">男
<input type="radio" name="sex" value="2">女
<input type="radio" name="sex" value="0">答えない</div>
<div>誕生日 (yyyy/mm/dd)<input type="text" name="dob"></div>
<div>身長 (整数)<input type="text" name="height"></div>
<div><input type="submit" value="更新"></div>
</form>

</body>
</html>
