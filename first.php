<?php
session_start();
$error1 = null;
$error2 = null;
if (!empty($_POST['action'])) {
	$name = $_POST['name'];
	$nickname = $_POST['nickname'];
	if ($name === '') {
		$error1 = '名前が未入力です';
	}
	if ($nickname === '') {
		$error2 = 'ニックネームが未入力です';
	}
	if (empty($error1) && empty($error2)) {
		$_SESSION['name'] = $name;
		$_SESSION['nickname'] = $nickname;
		header('Location: second.php');
		exit();
	}
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>ナンバー1 ver.1.0</title>
</head>
<body>
<h1>名前入力</h1>
<form action="" method="post">
<p>名前</p>
<input type="text" name="name">
<?php if(!empty($error1)): ?>
<p><?php echo $error1; ?></p>
<?php endif; ?>
<p>ニックネーム</p>
<input type="text" name="nickname"><br>
<?php if(!empty($error2)): ?>
<p><?php echo $error2; ?></p>
<?php endif; ?>
<p>メールアドレス</p>
<input type="text" name="email">
<p><input type="submit" name="action" value="登録"></p>
</form>
</body>
</html>
