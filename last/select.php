<?php
// HTML用 エスケープ関数
function h($s) {
  return htmlspecialchars($s, ENT_QUOTES, 'UTF-8');
}

// DBに接続
$dsn = "sqlite:database/kadai.db";
try {
	$dbh = new PDO($dsn);
	$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
	die("Database Connection failed: ".$e->getMessage());
}

// DBを検索
$sql = "SELECT * FROM kadai";
try {
	$pre = $dbh->prepare($sql);
	$pre->execute();
	$result = $pre->fetchall(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
	die("Database Selection failed: ".$e->getMessage());
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<style type="text/css">
	table, th, td {border:solid 1px; border-collapse:collapse; padding:8px;background-color: #00FF00;}
	th {background-color: #00CC00;}
	.right {text-align:right;}
	td {background-color: white;}
	.right {text-align:right;}
	body{
		background-color: #00FF00;
	}
</style>
<title>商品情報</title>
</head>
<body>

<marquee bgcolor='#00FF00' scrollamount=5 ><font color='green'><h2>商品リスト</h2></marquee>
<CENTER>
<table>

<tr><th>カテゴリ</th><th>JAN/ISBNコード</th><th>商品名</th><th>本体価格</th><th>メーカー</th><th>登録日</th><th>更新</th><th>削除</th></tr>

<?php
foreach ($result as $row) {
	echo "<tr>";
	echo "<td>", h($row['gen']), "</td>";
	echo "<td>", h($row['jan']), "</td>";
    echo "<td>", h($row['title']), "</td>";
    echo "<td class='right'>", h($row['price']), "</td>";
    echo "<td>", h($row['publish']), "</td>";
    echo "<td>", h($row['published']), "</td>";
    echo "<td><a href='update.php?jan=", h($row['jan']), "'><img src='images/re.jpeg'></a></td>";
    echo "<td><a href='delete.php?jan=", h($row['jan']), "'><img src='images/du.jpeg'></a></td>";
    echo "</tr>\n";
}
?>
</table>
<p>
	<input type="button" onClick="history.back();" value="戻る" style="background-color:white;"/>
</p></CENTER>
</body>
</html>