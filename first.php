<?php
session_start();
$error = null;
if (!empty($_POST['action'])) {
	$name = $_POST['name'];
	if ($name === '') {
		$error = '名前が未入力です';
	} else {
		$_SESSION['name'] = $name;
		header('Location: second.php');
		exit();
	}
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>ナンバー1</title>
</head>
<body>
<h1>名前入力</h1>
<form action="" method="post">
<p>名前</p>
<input type="text" name="name"><br>
<?php if(!empty($error)): ?>
<p><?php echo $error; ?></p>
<?php endif; ?>
<input type="submit" name="action" value="登録">
</form>
</body>
</html>
