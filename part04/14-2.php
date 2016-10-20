<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title></title>
</head>

<body>
<?php

// 出力時に必須の関数
// (HTML用 エスケープ関数)
function h($s) {
  return htmlspecialchars($s, ENT_QUOTES, 'UTF-8');
}

// DBに接続
// $user = 'sample';
// $pass = 'sample';
$dsn = 'sqlite:database/test_users.db';
//
try {
  $dbh = new PDO($dsn);
} catch (PDOException $e) {
  echo "connect error!! (" , $e->getMessage() , ")";
  return;
}

// DBから情報を一式読み出す
// ------------------------------

// 「準備された文(SQL statement)」を用意する
$sql = 'SELECT * FROM test_users';

// SQLを実行する
$stmt = $dbh->query($sql);
if (!$stmt) {
	echo "statement error!! (";
	print_r($dbh->errorInfo());
	return;
}

// 情報を取得し、テーブルとして出力する
echo "<table border='1'>\n";
//
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
  //
  echo "  <tr>\n";
  foreach ($row as $key => $val) {
    echo "    <td>", h($val), "</td>\n";
  }
  echo "  </tr>\n\n";
}
echo "</table>\n";
