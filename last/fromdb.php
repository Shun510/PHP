<?php
#入力変数
	#$_GET['isbn'] = "978-1234567890";
#出力変数
	#$msg: エラーメッセージ（正常時は""）
	#$isbn, $title, $price, $publish, $published

// ISBNコードのチェック
$msg = "";
if (empty($_GET['jan'])) {
	$msg = "janコードが指定されていません。<br />";
} else {
	$jan = trim($_GET['jan']);
	
	// DBに接続
	$dsn = "sqlite:database/kadai.db";
	try {
		$dbh = new PDO($dsn);
		$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch (PDOException $e) {
		die("Database Connection failed: ".$e->getMessage());
	}
	
	// DBを検索
	$sql = "SELECT gen,jan, title, price, publish, published FROM kadai WHERE jan=?";
	try {
		$pre = $dbh->prepare($sql);
		$pre->execute(array($jan));
		$result = $pre->fetchall(PDO::FETCH_ASSOC);
	} catch  (PDOException $e) {
		die("Database Selection failed: ".$e->getMessage());
	}
	
	// データを取得
	if (isset($result[0])) {
		$row = $result[0];
		$jan = $row['jan'];
		$gen = $row['gen'];
		$title = $row['title'];
		$price = $row['price'];
		$publish = $row['publish'];
		$published = $row['published'];
	} else {
		$msg = "該当する商品情報がありません。<br />";
	}
}
?>