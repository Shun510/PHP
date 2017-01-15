<?php
	require("validate.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<style type="text/css">
	body{
		background-color: #00FF00;
	}
</style>
<title>商品情報の登録</title>
</head>
<body>
<?php
if (strlen($msg) > 0) {
	echo "<p class='error'>$msg</p>\n";
} else {
	// DBに接続
	$dsn = "sqlite:database/kadai.db";
	try {
		$dbh = new PDO($dsn);
		$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch (PDOException $e) {
		die("Database Connection failed: ".$e->getMessage());
	}
	
	// DBを更新
	$sql = "INSERT INTO kadai (gen, jan, title, price, publish, published) VALUES (?, ?, ?, ?, ?, ?)";
	try {
		$pre = $dbh->prepare($sql);
		$result = $pre->execute(array($gen, $jan, $title, $price, $publish, $published));
	} catch  (PDOException $e) {
		die("Database Insertion failed: ".$e->getMessage());
	}
	if ($result) {
		$count = $pre->rowCount();
		echo "<p>商品情報を $count 件登録しました。</p>\n";
	} else {
		$err = $pre->errorCode();
		echo "<p class='error'>商品情報を登録できません。(エラーコード: ", $pre->errorCode(), ")</p>\n";
	}
}
?>
<p>
	<input type="button" onClick="history.back();" value="戻る" style="background-color:white;"/>
</p>
</body>
</html>