<?php
// セッションの開始
session_start();
// ユーザ名の取得
if (isset($_SESSION['uname'])) {
	$uname = $_SESSION['uname'];
} else {
	// ログインページへリダイレクト
	header('Location: ex07.php');
	exit();
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>ようこそ</title>
</head>
<body>
<h2>ようこそ</h2>
<p><?php echo $uname; ?>さん　こんにちは。
<form id="loginForm" method="post" action="ex07.php" />
  <input type="submit" value="ログアウト" />
</form>
</body>
</html>