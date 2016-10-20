<?php

/*
 * 14-3-insert.php と 14-3-select.php に共通な関数や処理をまとめたファイル
 */

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
  return ;
}
// エラーが発生した時点で例外を発生させ、スクリプトの実行を停止させる
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
