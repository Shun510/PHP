<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>検索結果を表示</title>
</head>
<body>
<h1><?php 

$nen = $_POST["nen"];
echo "{$nen}年公開の映画";
    ?>
    </h1>
</body>
<body>
<?php

// エラー判定用の変数(フラグ)を用意する
$error_flg = false;

// エラーであれば処理を終了
if (true === $error_flg) {
  return ;
}
// HTMLから値を受け取る
$nen = $_POST['nen'];

// 入力値のチェック
if ('' === $nen) {
  echo "公開年が入力されていません<br>\n";
  $error_flg = true;
}

// 年齢の値が数字かどうかをチェック
if (false === ctype_digit($nen)) {
  echo "公開年が数値ではありません<br>\n";
  $error_flg = true;
}
// エラーであれば処理を終了
if (true === $error_flg) {
  return ;
}

// 出力時に必須の関数
// (HTML用 エスケープ関数)
function h($s) {
  return htmlspecialchars($s, ENT_QUOTES, 'UTF-8');
}

// DBに接続
$dsn = 'sqlite:database/movie.db';
//
try {
  $dbh = new PDO($dsn);
} catch (PDOException $e) {
  echo "connect error!! (" , $e->getMessage() , ")";
  return ;
}
// エラーが発生した時点で例外を発生させ、スクリプトの実行を停止させる
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// DBから情報を一式読み出す
// ------------------------------

// 「準備された文(prepared statement)」を用意する

$sql = "SELECT * FROM movie ORDER BY name='$nen'";

$pre = $dbh->prepare($sql);

// SQLを実行する
$res = $pre->execute();

// 情報を取得し、テーブルとして出力する
echo "<table border='1'>\n";
//

while($row = $pre->fetch(PDO::FETCH_ASSOC)) {
  //
  echo "  <tr>\n";
  foreach($row as $key => $val) {
    echo "    <td>", h($val), "</td>\n";
  }
  echo "  </tr>\n\n";
}
echo "</table>\n";
?>
    </body>
    </html>
    