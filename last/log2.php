<?php
session_start() ;
// ユーザ名の取得
if (isset($_SESSION['uname'])) {
	$uname = $_SESSION['uname'];
} else {
	// ログインページへリダイレクト
	header('Location: log.php');
exit();
}


?>
<!DOCTYPE html>
<html>
<head>
<style type="text/css">
	body{
		background-color: #00FF00;
	}
</style>
<title>ようこそ</title>
</head>
<body>
<marquee><h1>ようこそ</h1></marquee>
<CENTER>
<p><?php echo $uname; ?>さん　こんにちは。</p>
<h2>商品リストシステムへようこそ</h2>
<p><a href="select.php">商品リスト・更新・削除</a></p>
<p><a href="insert.php">商品追加</a></p>
<form id="loginForm" method="post" action="index.html" />
  <input type="submit" value="ログアウト" style="background-color:white;"/>
</form>
</CENTER>
</body>
</html>