<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<style type="text/css">
	body{
		background-color: #00FF00;
	}
</style>
<title>商品情報の削除</title>
</head>
<body>
<?php
// ISBNコードをチェック
if (empty($_POST["jan"])) {
	echo "<p class='error'>janコードが指定されていません。<br /></p>\n";
} else {
	$jan = trim($_POST["jan"]);
	
	// DBに接続
	$dsn = "sqlite:database/kadai.db";
	try {
		$dbh = new PDO($dsn);
		$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch (PDOException $e) {
		die("Database Connection failed: ".$e->getMessage());
	}
	
	// DBを更新
	$sql = "DELETE FROM kadai WHERE jan=?";
	try {
		$pre = $dbh->prepare($sql);
		$result = $pre->execute(array($jan));
	} catch  (PDOException $e) {
		die("Database Deletion failed: ".$e->getMessage());
	}
	if ($result) {
		$count = $pre->rowCount();
		if ($count == 1)
			echo "<p>商品情報を 1 件削除しました。</p>\n";
		else
			echo "<p>削除する商品情報がありません。</p>\n";
	} else {
		$err = $pre->errorCode();
		echo "<p class='error'>商品情報を削除できません。(エラーコード: ", $pre->errorCode(), ")</p>\n";
	}
}
?>
<p>
	<input type="button" onClick="history.back();" value="戻る" style="background-color:white;"/>
</p>
</body>
</html>