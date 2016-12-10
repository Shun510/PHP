<?php
	require("validate.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<title>書籍情報の更新</title>
</head>
<body>
<?php
// ISBNコードをチェック
if (empty($_POST["isbn"])) {
	echo "<p class='error'>ISBNコードが指定されていません。<br /></p>\n";
} else {
	$isbn = trim($_POST["isbn"]);
}
if (strlen($msg) > 0) {
	echo "<p class='error'>$msg</p>\n";
} else {
	// DBに接続
	$dsn = "sqlite:database/books.db";
	try {
		$dbh = new PDO($dsn);
		$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch (PDOException $e) {
		die("Database Connection failed: ".$e->getMessage());
	}
	
	// DBを更新
	$sql = "UPDATE books SET  title=?, price=?, publish=?, published=? WHERE isbn = ?";
	try {
		$pre = $dbh->prepare($sql);
		$result = $pre->execute(array($title ,$price , $publish , $published , $isbn));
	} catch  (PDOException $e) {
		die("Database updation failed: ".$e->getMessage());
	}
	if ($result) {
		$count = $pre->rowCount();
		echo "<p>書籍情報を  $count 件更新しました。</p>\n";
	} else {
		$err = $pre->errorCode();
		echo "<p class='error'>書籍情報を更新できません。(エラーコード: ", $pre->errorCode(), ")</p>\n";
	}
}
?>
<p>
	<input type="button" onClick="history.back();" value="戻る" />
</p>
</body>
</html>