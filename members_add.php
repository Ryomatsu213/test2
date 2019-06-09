<html>
<head>
<meta charset="UTF-8">
<title>members_add</title>
</head>
<body>

<form action="members.php" method="post">
<div><input type="submit" value="戻る"></div>
</form>

<form action="members_add_output.php" method="post">
<div>名前 (10文字以内)<input type="text" name="name"></div>
<div>性別<input type="radio" name="sex" value="1">男
<input type="radio" name="sex" value="2">女
<input type="radio" name="sex" value="0">答えない</div>
<div>誕生日 (yyyy/mm/dd)<input type="text" name="dob"></div>
<div>身長 (整数)<input type="text" name="height"></div>
<div><input type="submit" value="追加"></div>
</form>

</body>
</html>