<?php
session_start();
if (empty($_SESSION['name'])) {
	header('Location: first.php');
	exit();
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>ナンバー2</title>
</head>
<body>
<p>登録内容の確認</p>
<form action="third.php" method="post">
<p>名前:
<?php echo $_SESSION['name']; ?>
</p>
<input type="submit" name="action" value="出力">
</form>
</body>
</html>
