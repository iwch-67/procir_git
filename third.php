<?php
session_start();
if (empty($_SESSION['name']) || empty($_SESSION['nickname'])) {
	header('Location: first.php');
	exit();
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>ナンバー3</title>
</head>
<body>
<p>登録ありがとうございました</p>
<p><a href="first.php">戻る</a></p>
</body>
</html>
